import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
class Navbar extends Component {

  render() {
    return (
		<nav className="navbar navbar-expand-lg navbar-light">
			<div className="container">
			  <NavLink className="navbar-brand" to="/home">
		      	<img src="../assets/img/brand/logo_peniti.png" className="img-fluid logo" alt="Logo" />
			  </NavLink>
			  <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			      <span className="icon-bar icon-bar-1"></span>
			      <span className="icon-bar icon-bar-2"></span>
			      <span className="icon-bar icon-bar-3"></span>
			  </button>

			  <div className="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <ul className="navbar-nav ml-auto">
			      <li className="nav-item">
					<a className="nav-link" href="/home">Home</a>
			      </li>
			      <li className="nav-item">
					<a className="nav-link" href="/services">Services</a>
			      </li>
			      <li className="nav-item">
					<a className="nav-link" href="/about">About Us</a>
			      </li>
			      <li className="nav-item">
					<a className="nav-link" href="/faq">FAQ</a>
			      </li>
			      <li className="nav-item">
					<a className="nav-link" href="/contact">Contact</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>

    );
  }
}

export default Navbar;

