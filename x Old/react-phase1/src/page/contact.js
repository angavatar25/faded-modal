import React, { Component } from 'react';
import { findDOMNode } from 'react-dom';
import $ from 'jquery';


import Card from '../components/card.js';
import Heading from '../components/heading.js';
import CoverSmaller from '../components/cover-smaller.js';
class Contact extends Component {

      clickSubmit(ev){
        $('.contact-box-holder').hide();
        $('.response-success').show();
        ev.preventDefault();
      }

      //try again
      clickTryAgian(){
        $('.response-error').hide();
        $('.contact-box-holder').show();
        return false;
      }
      
  render() {




    return (

	  <div className="wrapper">


	      <CoverSmaller coverName="cover-contact" headingTitle="Contact" />

	      <section className="section-main section-contact">
	        <div className="container">
	          <div className="contact-box">

	            <div className="contact-box-holder vps-fadeinup">
	              <small>Fill in the form below to contact us</small>  
	              <form>
	                <div className="form-group row">
	                  <label for="name" className="col-md-2 col-form-label">Nama</label>
	                  <div className="col-md-10">
	                    <input className="form-control" type="text" id="name" />
	                  </div>
	                </div>

	                <div className="form-group row has-danger">
	                  <label for="email" className="col-md-2 col-form-label">Email</label>
	                  <div className="col-md-10">
	                    <input className="form-control" type="text" id="email" />
	                    <small>Invalid email address. Please try again</small>
	                  </div>
	                </div>
	                <div className="form-group row">
	                  <label for="message" className="col-md-2 col-form-label">Message</label>
	                  <div className="col-md-10">
	                    <textarea className="form-control" id="message" rows="5"></textarea>
	                  </div>
	                </div>
	                <input type="submit" value="Send message" className="btn btn-primary" id="submit" onClick={this.clickSubmit.bind(this)} />
	              </form>
	            </div>

	            <div className="contact-response response-success">
	              <img src="../assets/img/common/ic_success.jpg" className=""/>
	              <h3>Success!</h3>
	              <p>Your message has been sent.</p>
	              <a className="btn btn-primary btn-ok">OK</a>
	            </div>

	            <div className="contact-response response-error">
	              <img src="../assets/img/common/ic_error.jpg" className=""/>
	              <h3>Error!</h3>
	              <p>Something went wrong. Please try again.</p>
	              <div className="btn-holder">
	                <a href="../index.php" className="btn btn-primary-outline">Back to home</a>
	                <a href="" className="btn btn-primary" id="tryAgain">Try again</a>
	              </div>
	            </div>

	          </div>
	        </div>
	      </section>

	      <section className="section-main section-address">
	        <div className="container">
	          <div className="row">
	            <div className="col-md-6 vps-fadeinup">
	              <h4>Kantor Airport Soekarno Hatta</h4>
	              <p>Mall Airport Hub Lt Dasar Blok NN<br/>
	              Jl. Tol Prof Sedyatmo Kav NN, Jakarta XXXXX<br/>
	              021-23456789 (Money Services)<br/>
	              021-23456789 (Travel Services)</p>

	              <p>Office hours: 24 hours</p>
	            </div>

	            <div className="col-md-6 vps-fadeinup delayp1">
	              <h4>Kantor Kebun Jeruk</h4>
	              <p>Gedung Graha Kencana Lt Dasar<br/>
	              Jl. Raya Perjuangan Kav 88, Jakarta 11530<br/>
	              021-5359056/57 (Money Services)<br/>
	              021-5360815/19 (Travel Services)</p>

	              <p>Office hours: Senin - Jumat | 9AM - 4PM</p>
	            </div>

	            <div className="col-md-6 vps-fadeinup">
	              <h4>Kantor Kelapa Gading</h4>
	              <p>Gedung Graha Kencana Lt Dasar<br/>
	              Jl. Raya Perjuangan Kav 88, Jakarta 11530<br/>
	              021-5359056/57 (Money Services)<br/>
	              021-5360815/19 (Travel Services)</p>

	              <p>Office hours: Senin - Jumat | 9AM - 4PM</p>

	            </div>

	            <div className="col-md-6 vps-fadeinup delayp1">
	              <h4>Kantor Gading Serpong</h4>
	              <p>Gedung Graha Kencana Lt Dasar<br/>
	              Jl. Raya Perjuangan Kav 88, Jakarta 11530<br/>
	              021-5359056/57 (Money Services)<br/>
	              021-5360815/19 (Travel Services)</p>

	              <p>Office hours: Senin - Jumat | 9AM - 4PM</p>
	            </div>
	          </div>

	        </div>
	      </section>

	    </div>

    );
  }
}

export default Contact;
