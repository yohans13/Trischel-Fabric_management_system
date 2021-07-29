
require('./bootstrap');


import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter) 


import ModalWizard from 'vue-modal-wizard'
Vue.use(ModalWizard)

  //router import
  import {routes} from './routes';

  //user class import
  import User from './helpers/user'
  window.User = User

  //notification class import
  import Notification from './helpers/Notification'
  window.Notification = Notification


  //datatables
  // import "bootstrap/dist/css/bootstrap.min.css"
  // import "datatables.net-bs5";
  // import "datatables.net-bs5/css/dataTables.bootstrap5.min.css";
  // import "datatables.net-buttons-bs5";
  // import "datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css";
  // import "pdfmake";
  // import "jszip";
  // import "jquery";
  // import "datatables.net-buttons/js/buttons.colVis.js";
  // import "datatables.net-buttons/js/buttons.html5.js";
  // import "datatables.net-buttons/js/buttons.print.js";
  // import "datatables.net-buttons/js/buttons.flash.js";






 //sweetalert2 start
 
 import Swal from 'sweetalert2'
 window.Swal = Swal;

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

window.Toast = Toast;


 //sweetalert end 

 //window reload
 window.Reload = new Vue();





const router = new VueRouter({
    routes ,
    mode:'history'
  })



const app = new Vue({
    el: '#app',
    router
});
