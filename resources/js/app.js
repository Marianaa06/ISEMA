
require('./bootstrap');

import Vue from 'vue';
import ProductComponent from './components/ProductComponent.vue';
import router from './router';


if (document.getElementById('product-app')) {
    new Vue({
        el: '#product-app',
        router,
    });
}