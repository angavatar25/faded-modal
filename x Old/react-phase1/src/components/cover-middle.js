import React, { Component } from 'react';

class CoverMiddle extends Component {
	headingSubtitle() {
		if(this.props.headingSubtitle) {
			return <h4 className="heading-subtitle">{this.props.headingSubtitle}</h4>;

		}
		else {
			return null;
		}
	}
	content() {
		if(this.props.content) {
			return <p className="heading-subtitle">{this.props.content}</p>;

		}
		else {
			return null;
		}
	}
	

	render() {
		return (
			<section className={"cover cover-middle " + this.props.coverName }>
				<div className="container">
					<div className="row">
						<div className="col-md-6">
					  		<div className="heading">
					    		<h2 className="heading-title animates fadeInUp">{this.props.headingTitle}</h2>
					    		{this.headingSubtitle()}
					  		</div>
					  		{this.content()}
				  		</div>
			            <div className="col-md-6">
			              <img src="../assets/img/common/img_banner_home_iphone.png" className="img-fluid img-phone animates fadeInUp delayp2" alt="home_iphone"/>
			            </div>
			  		</div>
				</div> 
			</section>
		);
	}

}

export default CoverMiddle;