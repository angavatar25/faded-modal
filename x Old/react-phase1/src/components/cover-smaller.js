import React, { Component } from 'react';
class CoverSmaller extends Component {
	headingSubtitle() {
		if(this.props.headingSubtitle) {
			return <h4 className="heading-subtitle">{this.props.headingSubtitle}</h4>;

		}
		else {
			return null;
		}
	}

	render() {
		return (
			<section className={"cover cover-smaller " + this.props.coverName }>
				<div className="container">
			  		<div className="heading">
			    		<h2 className="heading-title animates fadeInUp">{this.props.headingTitle}</h2>
			    		{this.headingSubtitle()}
			  		</div>
				</div> 
			</section>
		);
	}

}

export default CoverSmaller;