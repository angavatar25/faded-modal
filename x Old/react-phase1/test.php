<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Tcash extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        $this->ci =&get_instance(); 
        $this->load->model('Model_tcash_promo_save');
        $this->load->model('admin/Model_tcash_promo');
        $this->load->model('admin/Model_tcash_merchant');
        $this->load->model('admin/Model_tcash_category');
        $this->load->model('admin/Model_tcash_outlet');
        $this->load->model('admin/Model_data_image');

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['promo_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['merchant_get']['limit'] = 500; // 500 requests per hour per user/key

    }

    public function promo_get(){
        
        $get_data = $this->get_json();

        if(isset($get_data['getPromos'])){

            $search = $get_data['getPromos']['promo_name'];
            $category = $get_data['getPromos']['promo_category'];
            $lng = floatval($get_data['getPromos']['lng']);
            $lat = floatval($get_data['getPromos']['lat']);

            if(!empty($lng)&&!empty($lat)){

                //get nearby area by.Google
                $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$lng.",".$lat."&sensor=true";

                $options = array(
                  'http' => array(
                    'method'  => 'GET',
                    'header'=>  "Content-Type: application/json\r\n" .
                                "Accept: application/json\r\n"
                    )
                );

                $context  = stream_context_create( $options );
                $result = file_get_contents( $url, false, $context );
                $google_response = json_decode( $result );

                if(!$google_response){
                    $data = array("status"=>REST_Controller::HTTP_METHOD_NOT_ALLOWED,"error"=>"google maps error");
                    $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
                    die;
                }
                
                $address_components = $google_response->results[0]->address_components;
                
                for($i=0; $i<count((array)$address_components);$i++){
                   for($j=0; $j<count((array)$address_components[$i]->types);$j++){
                        if($address_components[$i]->types[$j] == "administrative_area_level_2"){
                            $location = $address_components[$i]->long_name;
                            $location = strtolower($location);
                            $location = str_replace("kota","",$location);
                            $location = str_replace("kabupaten","",$location);
                            $location = trim($location);
                            break;
                        }
                    } 
                }
            }
            $condition = array();
            $condition_like = array();

            $condition['expire_date>='] = date('Y-m-d');
            $condition['start_date<='] = date("Y-m-d");
            if (!empty($category)) {
                $condition['category_name'] = $category;
            }
            if (!empty($location) && $location !== 'all') {
                $condition['location_name'] = $location;
            }
            if (!empty($search)) {
                $condition_like['like'] = array('promo_name'=>$search);
                $condition_like['or_like'] = array('merchant_name'=>$search);
            }

            $list_promo = $this->Model_tcash_promo->select($condition, 
                                                            'promo_id', 
                                                            array('is_popular, expire_date ASC'),
                                                            $condition_like
                                                        );

            if (!empty($list_promo && is_array($list_promo))){
                foreach ($list_promo as $key => $value) {
                    $data[$key]['promo_id'] = $value['promo_id'];
                    $data[$key]['promo_name'] = $value['promo_name'];
                    $data[$key]['promo_logo'] = base_url().$value['promo_logo'];
                    $data[$key]['start_date'] = $value['start_date'];
                    $data[$key]['expire_date'] = $value['expire_date'];
                    $data[$key]['merchant_id'] = $value['merchant_id'];
                    $data[$key]['merchant_name'] = $value['merchant_name'];
                }
            }
            
            $response['promos'] = $data;
            $response['status'] = REST_Controller::HTTP_OK;
            $response['messages'] = "getPromos successfully";

            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
           
        }

        elseif(isset($get_data['getPromoDetail'])){

            $condition = array();
            $condition['promo_id'] = $get_data['getPromoDetail']['promo_id'];

            $list_promo = $this->Model_tcash_promo->select($condition, 
                                                            'promo_id'
                                                        );

            if (!empty($list_promo && is_array($list_promo))){
                foreach ($list_promo as $key => $value) {
                    $data[$key]['promo_id'] = $value['promo_id'];
                    $data[$key]['promo_name'] = $value['promo_name'];
                    $data[$key]['promo_logo'] = base_url().$value['promo_logo'];
                    $data[$key]['promo_terms'] = $value['promo_terms'];
                    $data[$key]['start_date'] = $value['start_date'];
                    $data[$key]['expire_date'] = $value['expire_date'];
                    $data[$key]['merchant_id'] = $value['merchant_id'];
                    $data[$key]['merchant_name'] = $value['merchant_name'];
                }
            }
            
            $response['promo'] = $data;
            $response['status'] = REST_Controller::HTTP_OK;
            $response['messages'] = "getPromoDetail successfully";

            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }

        elseif(isset($get_data['savePromo'])){
            
            if($get_data){

                $data['msisdn'] = $get_data['savePromo']['msisdn'];
                $data['promos_id'] = json_encode(array($get_data['savePromo']['promo_id']));

                $savedPromos = $this->Model_tcash_promo_save->select(array("msisdn"=>$data['msisdn']));

                if(!empty($savedPromos)&& is_array($savedPromos)){
                     $list_promo = json_decode($savedPromos[0]['promos_id']);

                    if(in_array($get_data['savePromo']['promo_id'], $list_promo)){
                        
                        $response = array("status"=>REST_Controller::HTTP_OK, "messages"=>"Promo ini sudah ada");   
                    
                    }else{
                        
                        array_push($list_promo, $get_data['savePromo']['promo_id']);              
                        $data['promos_id'] = json_encode($list_promo);

                        $this->Model_tcash_promo_save->update($data, array("msisdn"=>$data['msisdn'])); //update data

                        $response = array("status"=>REST_Controller::HTTP_OK, "messages"=>"Promo berhasil disimpan");
                    }
                    
                }else{

                    $this->Model_tcash_promo_save->insert($data);

                    $response = array("status"=>REST_Controller::HTTP_OK, "messages"=>"Promo berhasil disimpan");
                }
            }

            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }

        elseif(isset($get_data['getSavedPromos'])){

            $msisdn = $get_data['getSavedPromos']['msisdn'];
            $search = $get_data['getSavedPromos']['promo_name'];
            $category = $get_data['getSavedPromos']['promo_category'];
            $lng = floatval($get_data['getSavedPromos']['lng']);
            $lat = floatval($get_data['getSavedPromos']['lat']);

            if(!empty($msisdn)){

                $savedPromos = $this->Model_tcash_promo_save->select(array("msisdn"=>$msisdn)); 

                $promos_id = json_decode($savedPromos[0]['promos_id']);

                if(!empty($lng)&&!empty($lat)){

                    //get nearby area by.Google
                    $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$lng.",".$lat."&sensor=true";

                    $options = array(
                      'http' => array(
                        'method'  => 'GET',
                        'header'=>  "Content-Type: application/json\r\n" .
                                    "Accept: application/json\r\n"
                        )
                    );

                    $context  = stream_context_create( $options );
                    $result = file_get_contents( $url, false, $context );
                    
                    $google_response = json_decode( $result );

                    if(!$google_response){
                        $data = array("status"=>REST_Controller::HTTP_METHOD_NOT_ALLOWED, "error"=>"google maps error");
                        $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
                        die;
                    }
                    
                    $address_components = $google_response->results[0]->address_components;
                    
                    for($i=0; $i<count((array)$address_components);$i++){
                       for($j=0; $j<count((array)$address_components[$i]->types);$j++){
                            if($address_components[$i]->types[$j] == "administrative_area_level_2"){
                                $location = $address_components[$i]->long_name;
                                $location = strtolower($location);
                                $location = str_replace("kota","",$location);
                                $location = str_replace("kabupaten","",$location);
                                $location = trim($location);
                                break;
                            }
                        } 
                    }
                }
                $condition = array();
                $condition_like = array();
                $condition_in = array();

                $condition['expire_date>='] = date('Y-m-d');
                $condition['start_date<='] = date("Y-m-d");
                if(!empty($promos_id)){
                    $condition_in = $promos_id;
                }
                if (!empty($category)) {
                    $condition['category_name'] = $category;
                }
                if (!empty($location) && $location !== 'all') {
                    $condition['location_name'] = $location;
                }
                if (!empty($search)) {
                    $condition_like['like'] = array('promo_name'=>$search);
                    $condition_like['or_like'] = array('merchant_name'=>$search);
                }


                $list_promo = $this->Model_tcash_promo_save->selectPromo($condition, $condition_in,
                                                                'promo_id', 
                                                                array('is_popular, expire_date ASC'),
                                                                $condition_like
                                                            );

                if (!empty($list_promo && is_array($list_promo))){
                    foreach ($list_promo as $key => $value) {
                        $data[$key]['promo_id'] = $value['promo_id'];
                        $data[$key]['promo_name'] = $value['promo_name'];
                        $data[$key]['promo_logo'] = base_url().$value['promo_logo'];
                        $data[$key]['start_date'] = $value['start_date'];
                        $data[$key]['expire_date'] = $value['expire_date'];
                        $data[$key]['merchant_id'] = $value['merchant_id'];
                        $data[$key]['merchant_name'] = $value['merchant_name'];
                    }
                }

                $response['promos'] = $data;
                $response['status'] = REST_Controller::HTTP_OK;
                $response['messages'] = "getSavedPromos successfully";

            }else{
                $response = array("status"=>REST_Controller::HTTP_OK, "messages" =>"MSISDN tidak boleh kosong");
            }
            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }

        elseif(isset($get_data['deleteSavedPromos'])){

            $msisdn = $get_data['deleteSavedPromos']['msisdn'];
            $promo_id = $get_data['deleteSavedPromos']['promo_id'];

            if(!empty($msisdn)){

                $savedPromos = $this->Model_tcash_promo_save->select(array("msisdn"=>$msisdn)); 

                if(!empty($savedPromos)&& is_array($savedPromos)){
                     $list_promo = json_decode($savedPromos[0]['promos_id']);
                     if(in_array($promo_id, $list_promo)){
                         foreach ($list_promo as $key => $value) {
                            if($value == $promo_id){
                                unset($list_promo[$key]);
                            }
                         }
                         $data['msisdn'] = $msisdn;
                         $data['promos_id'] = json_encode($list_promo);

                        $this->Model_tcash_promo_save->update($data, array("msisdn"=>$data['msisdn'])); //update data
                        $response = array("status"=>REST_Controller::HTTP_OK, "messages"=>"Promo berhasil dihapus");
                     }else{
                        $response = array("status"=>REST_Controller::HTTP_OK, "messages"=>"Promo tidak ditemukan");
                     }


                }
            }

            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }elseif(isset($get_data['getCategory'])){

            $category_name = $get_data['getCategory']['category_name'];
            $data['categories'] = $this->Model_tcash_category->select('','',array('category_name ASC'));
            $response[$category_name] = $data;
            $response['status'] = REST_Controller::HTTP_OK;
            $response['messages'] = "getSavedPromos successfully";
            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code

        }

        elseif(isset($get_data['getMerchants'])){

            $search = $get_data['getMerchants']['merchant_name'];
            $category = $get_data['getMerchants']['merchant_category'];
            $lng = floatval($get_data['getMerchants']['lng']);
            $lat = floatval($get_data['getMerchants']['lat']);

            if(!empty($lng)&&!empty($lat)){

                //get nearby area by.Google
                $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$lng.",".$lat."&sensor=true";

                $options = array(
                  'http' => array(
                    'method'  => 'GET',
                    'header'=>  "Content-Type: application/json\r\n" .
                                "Accept: application/json\r\n"
                    )
                );

                $context  = stream_context_create( $options );
                $result = file_get_contents( $url, false, $context );

                $google_response = json_decode( $result );

                if(!$google_response){
                    $data = array("status"=>REST_Controller::HTTP_METHOD_NOT_ALLOWED,"error"=>"google maps error");
                    $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
                    die;
                }
                
                $address_components = $google_response->results[0]->address_components;
                
                for($i=0; $i<count((array)$address_components);$i++){
                   for($j=0; $j<count((array)$address_components[$i]->types);$j++){
                        if($address_components[$i]->types[$j] == "administrative_area_level_2"){
                            $location = $address_components[$i]->long_name;
                            $location = strtolower($location);
                            $location = str_replace("kota","",$location);
                            $location = str_replace("kabupaten","",$location);
                            $location = trim($location);
                            break;
                        }
                    } 
                }
            }
            $condition = array();
            $condition_outlet = array();

            if (!empty($category) && $category!='all') {
                $condition['category_name'] = $category;
            }
            if (!empty($location) && $location !== 'all') {
                $condition['location_name'] = $location;
            }
            if (!empty($search)) {
                $condition['merchant_url'] = $search;
            }

            $list_merchant['categories'] = $this->Model_tcash_category->select('','',array('category_name ASC'));

            $list_merchant['merchants'] = $this->Model_tcash_merchant->table_join_category($condition, array('order, merchant_name ASC'));

            $list_merchant['outlet'] =  $this->Model_tcash_outlet->table_join_location('',array('tcash_location.location_id'),
                                                                                    array('location_name ASC'));

            if (!empty($list_merchant['merchants'] && is_array($list_merchant['merchants']))){
                foreach ($list_merchant['merchants'] as $key => $value) {
                    $data[$key]['merchant_id'] = $value['merchant_id'];
                    $data[$key]['merchant_name'] = $value['merchant_name'];
                    $data[$key]['merchant_logo'] = base_url().$value['merchant_logo'];
                    $data[$key]['count_outlet'] = $value['count_outlet'];
                }
            }

            $response['merchants'] = $data;
            $response['status'] = REST_Controller::HTTP_OK;
            $response['messages'] = "getMerchants successfully";
            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }

        elseif(isset($get_data['getMerchantDetail'])){

            $condition = array();
            $condition['merchant_id'] = $get_data['getMerchantDetail']['merchant_id'];

            $list_merchant['merchants'] = $this->Model_tcash_merchant->table_join_category(array("tcash_merchant.merchant_id"=>$condition['merchant_id']));

            $list_merchant['outlet'] =  $this->Model_tcash_outlet->table_join_location('',array('tcash_location.location_id'),
                                                                                    array('location_name ASC'));

             if (!empty($list_merchant['merchants'] && is_array($list_merchant['merchants']))){
                foreach ($list_merchant['merchants'] as $key => $value) {
                    $data[$key]['merchant_id'] = $value['merchant_id'];
                    $data[$key]['merchant_name'] = $value['merchant_name'];
                    $data[$key]['merchant_logo'] = base_url().$value['merchant_logo'];
                    $data[$key]['count_outlet'] = $value['count_outlet'];
                    foreach ($list_merchant['outlet'] as $key_outlet => $value_outlet) {
                        $data[$key]['outlets'][$key_outlet] = $value_outlet;
                    }
                }
            }
            
            $response['merchant'] = $data;
            $response['status'] = REST_Controller::HTTP_OK;
            $response['messages'] = "getMerchantDetail successfully";

            $this->response($response, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }

        else{

            $data = array('request'=>$get_data,'status' => REST_Controller::HTTP_METHOD_NOT_ALLOWED,
                            'messages' => $this->lang->line('text_rest_unknown_method') 
                        );

            $this->response($data, REST_Controller::HTTP_OK);
        }
    }

    public function users_post()
    {
        // $this->some_model->update_user( ... );
        $message = [
            'id' => 100, // Automatically generated by the model
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'message' => 'Added a resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }
}
