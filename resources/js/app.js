/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
 

Vue.use(VueRouter)
window.Vue = require('vue');
import Vue from 'vue'
 
import {
    Form,
    HasError,
    AlertError
} from 'vform'
import VueProgressbar from 'vue-progressbar'
import VueRouter from 'vue-router'
import moment from 'moment'
import swal from 'sweetalert2'
 
 
 
 window.swal=swal ;
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
window.Fire =new Vue() ;

let routes = [{
        path: '/profile',
        component: require('./components/Profile.vue').default
    },
    {
        path: '/dashboard',
        component: require('./components/Dashboard.vue').default
    },
    {
        path: '/users',
        component: require('./components/Users.vue').default
    }

]
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

Vue.component('login-form', require('./components/login/LoginForm.vue').default);
Vue.component('post-form', require('./components/posts/PostForm.vue').default);
Vue.component('create-post-modal', require('./components/posts/CreatePostModal.vue').default);

Vue.component('post', require('./components/Post.vue').default);
Vue.component('profile', require('./components/Profile.vue').default);

Vue.component('image-clicked-modal', require('./components/ImageClickedModal.vue').default);
Vue.component('create-account-modal', require('./components/CreateAccountModal.vue').default);

Vue.component('dashboard', require('./components/Dashboard.vue').default);
Vue.filter('firstLettertoUpperCase', function (text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
});
Vue.filter('splitString', function (text) {
    return text.toUpperCase().split(",") ;
});
Vue.filter('reformatMyDate', function (date) {
    return moment(date).format('MMM  Do / YY');
});
const options = {
  color: 'green',
  failedColor: 'red',
  thickness: '5px',
  transition: {
    speed: '0.1s',
    opacity: '0.6s',
    termination: 1900
  },
  autoRevert: true,
  location: 'top',
  inverse: false
};

Vue.use(VueProgressbar, options) ;

const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
   
})
window.toast=toast ;
const app = new Vue({
    el: '#app',
    router,


});
