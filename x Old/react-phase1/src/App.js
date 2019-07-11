import React, { Component } from 'react';
import Card from './components/card.js';
import Heading from './components/heading.js';
import Navbar from './components/navbar.js';
import Footer from './components/footer.js';

class App extends Component {

  render() {
    return (
      <div>
          <Navbar />
        	{this.props.children}
      	<Footer />
      </div>

    );
  }
}

export default App;
