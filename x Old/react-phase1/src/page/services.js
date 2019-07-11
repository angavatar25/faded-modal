import React, { Component } from 'react';
import { findDOMNode } from 'react-dom';

import $ from 'jquery';

import Heading from '../components/heading';
import Button from '../components/button';
import Card from '../components/card';
import CoverSmaller from '../components/cover-smaller';

class Services extends Component {
    
  render() {
    return (
    	<div>
    		<CoverSmaller coverName="cover-services" headingTitle="Services" />


		      <section className="section-main section-services">
		        <div className="container">
		          <div className="row">
		            <div className="col-md-6 vps-fadeinleft">
		              <img src="../assets/img/bg/img_service_exchange.jpg" className="img-fluid" alt="serivce_exchange"/>
		            </div>
		            <div className="col-md-6 vps-fadeinright">
		              <img src="../assets/img/common/ic_exchange-120.jpg" className="ic_services" alt="ic_exchange"/>
		             
		              <Heading headingTitle="Money Exchange"/>
		             
		              <p>Kami memperdagangkan beragam mata uang dengan nilai tukar yang kompetitif dan komitment yang tinggi.</p>
		            </div>
		          </div> 


		          <div className="row ">
		            <div className="col-md-6 vps-fadeinleft">
		              <img src="../assets/img/bg/img_service_remittance.jpg" className="img-fluid" alt="serivce_remittance"/>
		            </div>
		            <div className="col-md-6 vps-fadeinright">
		              <img src="../assets/img/common/ic_remittance-120.jpg" className="ic_services" alt="ic_exchange"/>

		              <Heading headingTitle="Money Remittance"/>

		              <p>Kami mengirim berbagai mata uang ke seluruh belahan dunia dengan nilai tukar yang kompetitif, waktu yang cepat dan proses yang  tranparant.</p>
		            </div>
		          </div>   

		          <div className="row">
		            <div className="col-md-6 vps-fadeinleft">
		              <img src="../assets/img/bg/img_service_travel.jpg" className="img-fluid" alt="serivce_services"/>
		            </div>
		            <div className="col-md-6 vps-fadeinright">
		              <img src="../assets/img/common/ic_travel-120.jpg" className="ic_services" alt="ic_services"/>
		              
		              <Heading headingTitle="Money Exchange"/>
		              <p>Kami meyediakan jasa perjalanan korporasi dan privat ke seluruh Indonesia dan dunia.</p>
		            
		            </div>
		          </div>

		        </div>
		      </section>
    	</div>
    );
  }
}

export default Services;
