window.Vue = require('vue');

// Importing App component
import App from './views/App';

const app = new Vue({
    el: '#root',
    render: h => h(App)
});