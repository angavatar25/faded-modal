import React, { Component } from 'react';
import { findDOMNode } from 'react-dom';

import $ from 'jquery';


import Heading from '../components/heading';
import Button from '../components/button';
import Card from '../components/card';
import CoverSmaller from '../components/cover-smaller';
import CardFaq from '../components/card-faq';


class FAQ extends Component {
	  	constructor(props) {
			super(props);
		}
	switchData(data){

        switch(data) {
          case "1":
            $('.accordion').hide();
            $('#accordion-1').fadeIn();
      		$('.topic-list a').removeClass('active');
      		$('#mataUang').addClass('active');
            break;
          case "2":
            $('.accordion').hide();
            $('#accordion-2').fadeIn();
      		$('.topic-list a').removeClass('active');
      		$('#kurs').addClass('active');
            break;
          case "3": 
            $('.accordion').hide();
            $('#accordion-3').fadeIn();
      		$('.topic-list a').removeClass('active');
      		$('#denominasi').addClass('active');
            break;
          case "4":
            $('.accordion').hide();
            $('#accordion-4').fadeIn();
      		$('.topic-list a').removeClass('active');
      		$('#transaksi').addClass('active');
            break;
          case "5":
            $('.accordion').hide();
            $('#accordion-5').fadeIn();
      		$('.topic-list a').removeClass('active');
      		$('#pengiriman').addClass('active');
            break;
          case "6":
            $('.accordion').hide();
            $('#accordion-6').fadeIn();
      		$('.topic-list a').removeClass('active');
      		$('#transfer').addClass('active');
            break;
          default:
            $('.accordion').hide();
            $('#accordion-1').fadeIn();
      		$('.topic-list a').removeClass('active');
      		$('#mataUang').addClass('active');
        }
      }


  render() {
    return (
    	<div>
    		<CoverSmaller coverName="cover-faq" headingTitle="FAQ" />

	      <section className="section-main section-faq">
	        <div className="container">
	          <div className="row">
	            <div className="col-md-5 col-lg-4 vps-fadeinup">
	              <h3>Topik</h3>
	              <ul className="topic-list hidden-sm-down">
	                <li><a className="active" id="mataUang" onClick={this.switchData.bind(this, "1")}>Mata Uang</a></li>
	                <li><a id="kurs" onClick={this.switchData.bind(this, "2")}>Kurs</a></li>
	                <li><a id="denominasi" onClick={this.switchData.bind(this, "3")}>Denominasi/Pecahan</a></li>
	                <li><a id="transaksi" onClick={this.switchData.bind(this, "4")}>Transaksi</a></li>
	                <li><a id="pengiriman" onClick={this.switchData.bind(this, "5")}>Pengiriman Fisik Valas</a></li>
	                <li><a id="transfer" onClick={this.switchData.bind(this, "6")}>Transfer Dana</a></li>
	              </ul>


	              <select className="hidden-md-up vps-fadeinup">
	                <option value="1">Mata Uang</option>
	                <option value="2">Kurs</option>
	                <option value="3">Denominasi/Pecahan</option>
	                <option value="4">Transaksi</option>
	                <option value="5">Pengiriman Fisik Valas</option>
	                <option value="6">Transfer Dana</option>
	              </select>
	            </div>

	            <div className="col-md-7 col-lg-8">
	              <div className="faq-boxes-holder accordion accordion-1 vps-fadeinup delayp1" id="accordion-1" role="tablist">
	              	<CardFaq dataParent="accordion-1" collapse="collapse" show="show" questionLink="collapseOne-1" headings="headingOne-1" question="1. Apakah ada menyediakan jasa antar keluar kota?" answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-1" collapse="collapse" questionLink="collapseTwo-1" headings="headingTwo-1" question="2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-1" collapse="collapse" questionLink="collapseThree-1" headings="headingThree-1" question="3.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              </div>
	      	      <div className="faq-boxes-holder accordion accordion-2" id="accordion-2" role="tablist">
	              	<CardFaq dataParent="accordion-2" collapse="collapse" show="show" questionLink="collapseOne-2" headings="headingOne-2" question="2. Apakah ada menyediakan jasa antar keluar kota?" answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-2" collapse="collapse" questionLink="collapseTwo-2" headings="headingTwo-2" question="2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-2" collapse="collapse" questionLink="collapseThree-2" headings="headingThree-2" question="3.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              </div>

	              <div className="faq-boxes-holder accordion accordion-3 vps-fadeinup delayp1" id="accordion-3" role="tablist">
	              	<CardFaq dataParent="accordion-3" collapse="collapse" show="show" questionLink="collapseOne-3" headings="headingOne-3" question="3. Apakah ada menyediakan jasa antar keluar kota?" answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-3" collapse="collapse" questionLink="collapseTwo-3" headings="headingTwo-3" question="2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-3" collapse="collapse" questionLink="collapseThree-3" headings="headingThree-3" question="3.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              </div>
	      	      <div className="faq-boxes-holder accordion accordion-4" id="accordion-4" role="tablist">
	              	<CardFaq dataParent="accordion-4" collapse="collapse" show="show" questionLink="collapseOne-4" headings="headingOne-4" question="4. Apakah ada menyediakan jasa antar keluar kota?" answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-4" collapse="collapse" questionLink="collapseTwo-4" headings="headingTwo-4" question="2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-4" collapse="collapse" questionLink="collapseThree-4" headings="headingThree-4" question="3.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              </div>

	              <div className="faq-boxes-holder accordion accordion-5 vps-fadeinup delayp1" id="accordion-5" role="tablist">
	              	<CardFaq dataParent="accordion-5" collapse="collapse" show="show" questionLink="collapseOne-5" headings="headingOne-5" question="5. Apakah ada menyediakan jasa antar keluar kota?" answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-5" collapse="collapse" questionLink="collapseTwo-5" headings="headingTwo-5" question="5. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-5" collapse="collapse" questionLink="collapseThree-5" headings="headingThree-5" question="5. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              </div>
	      	      <div className="faq-boxes-holder accordion accordion-6" id="accordion-6" role="tablist">
	              	<CardFaq dataParent="accordion-6" collapse="collapse" show="show" questionLink="collapseOne-6" headings="headingOne-6" question="6. Apakah ada menyediakan jasa antar keluar kota?" answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-6" collapse="collapse" questionLink="collapseTwo-6" headings="headingTwo-6" question="6. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              	<CardFaq dataParent="accordion-6" collapse="collapse" questionLink="collapseThree-6" headings="headingThree-6" question="6. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid." answer="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid."/>
	              </div>
	            </div> 
	           </div>{/*row */}
	        </div>{/* container */}
	        
	      </section>
    	</div>
    );
  }
}

export default FAQ;
