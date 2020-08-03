import Vue from 'vue'
import axios from 'axios';

import App from './components/AppComponent'

axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api/v1`

const app = new Vue({
    el: '#app',
    components: { App }
});