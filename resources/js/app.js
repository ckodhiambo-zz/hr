import Vue from 'vue'
// import * as mdb from 'mdb-ui-kit'; // lib
// import { Input } from 'mdb-ui-kit'; // module

require('./bootstrap');

window.Vue = require('vue');
window.Fire = new Vue();
// import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


import VueToastr from "vue-toastr";
Vue.use(VueToastr, {
    defaultTimeout: 3000,
    defaultPosition: "toast-top-right",
    defaultProgressBar: false,
    defaultProgressBarValue:0,
});

import moment from 'moment';
Vue.filter("date", function(created){
    return moment(created).format(' Do MMMM YYYY, h:mm:ss a');
});




import Swal from 'sweetalert2'
window.swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

window.toast = Toast;
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.component('role', require('./components/role.vue').default);

Vue.component('user', require('./components/user.vue').default);

Vue.component('loading', require('./components/loading.vue').default);




// require('./component');
//
// require('./roles');



//implements vue js anywhere with the app id.
const app = new Vue({
    el: '#app'
});

