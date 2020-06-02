/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./fontawesome');

window.Vue = require('vue');

import Coreui from '@coreui/coreui';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/**
 * Menu Scrolled function
 */

const header = document.querySelector('.main-header');
window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    if (scrollPos > 10) {
        header.classList.add('scrolled')
    } else {
        header.classList.remove('scrolled');
    }
})

//Scroll to top
$(window).on('scroll', function () {
    'use strict';
    if ($(this).scrollTop() != 0) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});
$('#toTop').on('click', function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});
