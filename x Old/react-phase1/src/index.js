import React from 'react';
import ReactDOM from 'react-dom';
import { Router } from 'react-router';
import createBrowserHistory from 'history/createBrowserHistory'
import routes from './routes';
import registerServiceWorker from './registerServiceWorker';
import './assets/css/main.css';

const customHistory = createBrowserHistory();

ReactDOM.render(<Router history={ customHistory } >
                    {routes}
                </Router>, document.getElementById('root'));
registerServiceWorker();
