import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
class Footer extends Component {

  render() {
    return (
		<footer>
			<div className="container">

				<div className="footer-top">
					<div className="row">
						<div className="col-md-4">
		      				<img src="../assets/img/brand/logo_peniti.png" className="img-fluid logo" alt="Logo" />
						</div>
						<div className="col-md-8">
							<ul>
								<li><NavLink className="nav-link" to="/services">Services</NavLink></li>
								<li><NavLink className="nav-link" to="/about">About Us</NavLink></li>
								<li><NavLink className="nav-link" to="/faq">FAQ</NavLink></li>
								<li><NavLink className="nav-link" to="/contact">Contact</NavLink></li>

							</ul>
						</div>
					</div>
				</div>
				<div className="footer-bottom">
					<h5>Peniti Kebon Jeruk</h5>
					<div className="row">
						<div className="col-md-4">
							<p><img src="../assets/img/common/ic_footer_address.png" className="ic-footer" alt="address"/>
							Gedung Graha Kencana Lt. Dasar<br/>
							Jl. Raya Perjuangan Kav 88, Jakarta 11530</p>
						</div>
						<div className="col-md-4">
							<p><img src="../assets/img/common/ic_footer_phone.png" className="ic-footer" alt="address"/>
							535 9056/57 (Money Services)<br/>
							536 0815/19 (Travel Services)</p>
						</div>
						<div className="col-md-4">
							<span className="copyright">&copy; 2017 PENITI</span>
							<ul>
								<li><NavLink to="/privacy-policy">Privacy Policy</NavLink></li>
								<li><NavLink to="/terms-conditions">Terms & Condition</NavLink></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

    );
  }
}

export default Footer;

