import React from 'react';
import { Route } from 'react-router';
import App from './App';
import Home from './page/home';
import About from './page/about';
import Contact from './page/contact';
import Services from './page/services';
import Faq from './page/faq';
import PrivacyPolicy from './page/privacy-policy';
import TermsConditions from './page/terms-conditions';

export default (
   <App>

    <Route exact path="/" component={ Home }/>
    <Route path="/home" component={ Home }/>
    <Route path="/services" component={ Services }/>

    <Route path="/about" component={ About }/>
    <Route path="/contact" component={ Contact }/>
    <Route path="/faq" component={ Faq }/>
    <Route path="/privacy-policy" component={ PrivacyPolicy }/>
    <Route path="/terms-conditions" component={ TermsConditions }/>

   </App>
);