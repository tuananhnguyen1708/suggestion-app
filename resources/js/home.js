require('./bootstrap');

import 'datatables';
window.Vue = require('vue');
import Vue from 'vue'


Vue.component('user-management',require('../js/components/User/UserManagement'))

var vm = new Vue({
    el: '#app',
    data() {
        return {

        }
    },
    mounted() {

    },
    methods: {

    }
});
