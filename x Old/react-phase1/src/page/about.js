import React, { Component } from 'react';
import Heading from '../components/heading';
import Button from '../components/button';
import Card from '../components/card';
import CoverSmaller from '../components/cover-smaller';

class About extends Component {
    
  render() {
    return (
    	<div>

    	<CoverSmaller coverName="cover-about" headingTitle = "About" />
	

	      <section className="section-main section-about">
	        <div className="container">
	          <p className="content vps-fadeinup">Kami berdiri sejak  tahun 1997 sebagai perusahaan pedagang asing (PT Peniti Valasindo) yang kemudian berekspansi ke perusahaan jasa perjalanan (PT Peniti Travel Services) dan perusahaan pengiriman uang (PT Peniti Money Remittance).</p>
	        </div>
	      </section>

	      <section className="section-main section-about-2">
	        <div className="container">
	          <div className="row">
	            <div className="col-md-5">
	              <img src="../assets/img/bg/img_about.jpg" className="img-fluid vps-fadeinup" alt="about"/>
	            </div>
	            <div className="col-md-7">
	              <div className="text-container vps-fadeinup">
	                <p>Misi kami adalah memperdagangkan  berbagai mata uang dunia dengan kurs yang kompetitif, komitment yang tinggi dan pelayanan yang memuaskan.</p>
	                <p>Berkat kepercayaan dari nasabah memungkinkan kami memperluas usaha  kami ke jasa perjalanan dan jasa pengiriman uang.</p>
	              </div>

	              <div className="holder">
	                <img src="../assets/img/common/logo_ppatk.png" className="vps-fadeinup" alt="logo_ppatk"/>
	                <img src="../assets/img/common/logo_bi.png" className="vps-fadeinup delayp1" alt="logo_bi"/>
	                <img src="../assets/img/common/logo_ojk.png" className="vps-fadeinup delayp2" alt="logo_ojk"/>
	              </div>

	            </div>
	          </div>

	        </div>
	      </section>

    	</div>
    );
  }
}

export default About;
