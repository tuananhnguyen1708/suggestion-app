require('./bootstrap');

import 'datatables';
window.Vue = require('vue');
import Vue from 'vue'


Vue.component('user-management',require('../js/components/User/UserManagement'))
Vue.component('user-table',require('../js/components/User/UserTable'))
Vue.component('user-modal',require('../js/components/User/UserModal'))

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
