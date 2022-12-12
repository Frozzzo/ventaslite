//Import custom Scripts
import Swal from "sweetalert2";
window.Swal = Swal;

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

//Importanción de libreria de alertas

import alertify from "alertifyjs";
window.alertify = alertify;

alertify.defaults.transition = "slide";
alertify.defaults.theme.ok = "btn btn-primary";
alertify.defaults.theme.cancel = "btn btn-danger";
alertify.defaults.theme.input = "form-control";


const retrieveId = (e) =>
{
  e.preventDefault();
  document.querySelector('#logout-form').submit();
}

const hrefLogout = document.querySelector('#a-logout');

hrefLogout.addEventListener('click', retrieveId);