import React, { Component } from 'react';
 class Heading extends Component {

	subheadingTitle() {
		if(this.props.subheadingTitle) {
			return <h4 className="subheading-title">{this.props.subheadingTitle}</h4>;
		}
		else {
			return null;
		}
	}

	content() {
		if(this.props.content) {
			return <p className="content">{this.props.content}</p>;
		}
		else {
			return null;
		}
	}

	 render() {
	  		
	    return (
	    	<div className="heading">
	    		<h2 className="heading-title">{this.props.headingTitle}</h2>
	    		{this.subheadingTitle()}
	    		{this.content()}
	    	</div>
	    );
	  }
}

export default Heading;

