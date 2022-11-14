//Import custom Scripts
import Swal from "sweetalert2";
window.Swal = Swal;

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

const retrieveId = (e) =>
{
  e.preventDefault();
  document.querySelector('#logout-form').submit();
}

const hrefLogout = document.querySelector('#a-logout');

hrefLogout.addEventListener('click', retrieveId);