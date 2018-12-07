require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data() {
        return {
            name: "",
            password: "",
            remember : false,
        }
    },
    method(){

    }
});
