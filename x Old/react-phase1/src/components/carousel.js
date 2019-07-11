import React, { Component } from 'react';
class Carousel extends Component {
  
  render() {
    return (
      <div id={this.props.id} className="carousel slide" data-ride="carousel">
        <ol className="carousel-indicators">
          <li data-target={this.props.id} data-slide-to="0" className="active"></li>
          <li data-target={this.props.id} data-slide-to="1"></li>
          <li data-target={this.props.id} data-slide-to="2"></li>
        </ol>
        <div className="carousel-inner" role="listbox">
          <div className="carousel-item active">
            <img className="d-block img-fluid" src="..." alt="First slide" />
          </div>
          <div className="carousel-item">
            <img className="d-block img-fluid" src="..." alt="Second slide" />
          </div>
          <div className="carousel-item">
            <img className="d-block img-fluid" src="..." alt="Third slide" />
          </div>
        </div>
        <a className="carousel-control-prev" href={this.props.id} role="button" data-slide="prev">
          <span className="carousel-control-prev-icon" aria-hidden="true"></span>
          <span className="sr-only">Previous</span>
        </a>
        <a className="carousel-control-next" href={this.props.id} role="button" data-slide="next">
          <span className="carousel-control-next-icon" aria-hidden="true"></span>
          <span className="sr-only">Next</span>
        </a>
      </div>


    );
  }
}

export default Carousel; 

