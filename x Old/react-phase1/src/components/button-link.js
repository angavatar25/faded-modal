
import React, { Component } from 'react';
const ButtonLink = (props) => {
	console.log(props);
    return <a href={props.hrefLink} className={'btn ' + props.btnClass}>{props.btnName}</a>;
}

/*class ButtonLink extends Component {
  render() {
    return (
    <a href={props.hrefLink} className={'btn ' + props.btnClass}>{props.btnName}</a>;
    );
  }
} */

export default ButtonLink;

