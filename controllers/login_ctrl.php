<?php
// session_start();

// $_SESSION['error'] = [];
// $_SESSION['admin'] = false;

// $login_swal = false;
// $admin = "Coincoin-666";
// $password = '$2y$10$vu0NR244UAyHDO.bQqsGoOUdhimLV/I6ddhuFTvlSGf/Jz4MQ8JF6';

// if (isset($_POST['login_btn']) && $_SESSION['error'] == 0) {
//     if ($_POST['pseudonymn'] == $admin && password_verify($_POST['password'], $password)) {
//         $_SESSION['admin'] = true;
//         $login_swal = true;
//         header('Location: ../views/dashboard.php');
//     } else {
//         header('Location: ../index.php');
//     }
// }





// if (isset($_POST['login'])) {
//     if (password_verify($_POST['password'], ':password') && $_POST['pseudonymn'] == ':pseudonymn') {
//         $_SESSION['admin'] = true;
//         $login_swal = true;
//     } else if ($_POST['pseudonymn'] != $adminVerif['pseudonymn']) {
//         $_SESSION['admin'] = false;
//         $_SESSION['error'] = "Unknown username.";
//         session_unset();
//         session_destroy();
//         header('Location: ../index.php');
//     } else if ($_POST['password'] != $adminVerif['password']) {
//         $_SESSION['admin'] = false;
//         $_SESSION['error'] = "Unknown password.";
//         session_unset();
//         session_destroy();
//         header('Location: ../index.php');
//     }
// }