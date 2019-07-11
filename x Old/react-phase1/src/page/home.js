import React, { Component } from 'react';
import Card from '../components/card.js';
import Heading from '../components/heading.js';
import ButtonLink from '../components/button-link.js';
import CoverMiddle from '../components/cover-middle.js';

class Home extends Component {
  render() {
    return (
      <div>


      		<CoverMiddle coverName="cover-home" headingTitle={["We Exchange Currencies and", <br/>, "Destination"]} content="Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod, id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi velit. Mauris turpis nisl, molestie ut ipsum et, suscipit vehicula odio."/>


		      <section className="section-main section-about-home">
		        <div className="container">
		          <div className="heading">
		            <h2 className="heading-title vps-fadeinup">About PENITI</h2>
		          </div>
		          <p className="content vps-fadeinup delayp1">Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod, id commodo mi consectetur.</p>
		          
		          <ButtonLink hrefLink="/about" btnClass="btn-primary" btnName="About" />

		        </div>
		      </section> 

		      <section className="section-main section-services-home">
		        <div className="container">
		        	<Heading headingTitle="Services" />
		        </div>
		      </section>
		      
		      <div className="container services-boxes">
		       <div className="row">
		          <div className="col-md-4">
		            <div className="box vps-fadeinup">
		              <img src="/assets/img/common/ic_exchange-80.jpg" className="ic_services-home" alt="ic_exchange"/>
		              <h3>Money Exchange</h3>
		              <p>Kami memperdagangkan beragam mata uang dengan nilai tukar yang kompetitif dan komitment yang tinggi.</p>
		            </div>
		          </div>
		          
		          <div className="col-md-4">
		            <div className="box vps-fadeinup delayp1">
		              <img src="../assets/img/common/ic_remittance-80.jpg" className="ic_services-home" alt="ic_exchange"/>
		              <h3>Money Remittance</h3>
		              <p>Kami mengirim berbagai mata uang ke seluruh belahan dunia dengan nilai tukar yang kompetitif, waktu yang cepat dan proses yang  tranparant.</p>
		            </div>
		          </div>

		          <div className="col-md-4">
		            <div className="box vps-fadeinup delayp2">
		              <img src="../assets/img/common/ic_travel-80.jpg" className="ic_services-home" alt="ic_exchange"/>
		              <h3>Travel Services</h3>
		              <p>Kami meyediakan jasa perjalanan korporasi dan privat ke seluruh Indonesia dan dunia.</p>
		            </div>
		          </div>
		        </div>
		      </div>


		      <section className="section-main section-download-home">
		        <div className="container">
		          <div className="row">
		            <div className="col-md-6">
		            	<Heading headingTitle="Download PENITI Money"/>
		              <p className="content vps-fadeinup delayp1">Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod.</p>
		              <div className="download-group vps-fadeinup delayp2">
		                <a href=""><img src="../assets/img/common/button_playstore.jpg" className="download-btn" alt="Play Store"/></a>
		                <a href=""><img src="../assets/img/common/button_appstore.jpg" className="download-btn btn-apple" alt="App Store"/></a>
		              </div>

		            </div>


		          </div>
		        </div>
		        
		        <img src="../assets/img/common/img_iphone_download.jpg" className="img-fluid img-download vps-fadein delayp2" alt="img-download"/>

		      </section>
      </div>
    );
  }
}

export default Home;
