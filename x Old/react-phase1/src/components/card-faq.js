

import React, { Component } from 'react';
class CardFaq extends Component {
	
	show() {
		if(this.props.show) {
			return this.props.show
		}
		else {
			return '';
		}
	}

  render() {
    return (
        <div className="card box">
          <div className="card-header" role="tab" id={this.props.headings}>
            <h5 className="mb-0">
              <a data-toggle="collapse" href={'#' + this.props.questionLink} role="button" aria-expanded="true">
                {this.props.question}
              </a>
            </h5>
          </div>

          <div id={this.props.questionLink} className={this.props.collapse +' ' + this.show()} role="tabpanel" aria-labelledby={this.props.headings} data-parent={"#" + this.props.dataParent}>
            <div className="card-body">
            	{this.props.answer}
            </div>
          </div>
        </div>
	                
    );
  }
}

export default CardFaq; 


	                