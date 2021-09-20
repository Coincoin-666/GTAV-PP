import Swal from "https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js";
const Swal = require('sweetalert2');

let success = $.getJSON("views/add_user.php", $add_success_AJAX);

if (success) {
    Swal.fire({
        icon: 'success',
        titleText: 'Congrats.',
        text: 'Your profile has been created.',
        timer: '10000',
        showConfirmButton: true,
        confirmButtonText: 'OK',
        confirmButtonColor: '#FFD700',
        background: '#151513'
    })
};