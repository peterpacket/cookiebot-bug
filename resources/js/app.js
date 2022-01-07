import Vue from 'vue';
import './bootstrap';

window.Vue = Vue;

Vue.component('ButtonComponent', require('./ButtonComponent').default);

window.onload = function () {
    const app = new Vue({
        el: '#app',
    });
};
