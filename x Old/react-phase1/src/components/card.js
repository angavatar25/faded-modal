import React, { Component } from 'react';
class Card extends Component {
	
  render() {
    return (
		<div className="card">
		  <img className="card-img-top img-fluid" src={this.props.imgSrc} />
		  <div className="card-block">
		    <h4 className="card-title">{this.props.cardTitle}</h4>
		    <p className="card-text">{this.props.cardText}</p>
		    <a href={this.props.href} className={"btn " + this.props.btnClass}></a>
		  </div>
		</div>
    );
  }
}

export default Card; 

