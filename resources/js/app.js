import '@fortawesome/fontawesome-free/css/fontawesome.css';
import '@fortawesome/fontawesome-free/css/regular.css';
import '@fortawesome/fontawesome-free/css/solid.css';
import '@fortawesome/fontawesome-free/css/brands.css';
// import $ from 'jquery';
// window.$ = window.jQuery = $;
//
// import 'select2';

// Initialize Select2 after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    $('select[multiple]').select2({
        placeholder: 'Select options',
        width: '100%'
    });
});

// import Alpine from 'alpinejs'
//
// window.Alpine = Alpine
// Alpine.start()

// import { createApp } from 'vue';
// import TinyMCE from './components/TinyMCE.vue';
//
// // Create Vue app
// const app = createApp({});
//
// // Register components
// app.component('tinymce-editor', TinyMCE);
//
// // Mount the app
// app.mount('#app');

import './echo';
