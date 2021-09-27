<?php
require "../tools/functions.php";
// session_start()
/**
 * Aim at regrouping all admin involved controls.
 * Works with functions.php & login.php.
 */

$pics_error = [];

$valid_format = ["image/png"];

// Session/Login functions.
// $_SESSION['error'] = [];
// $_SESSION['admin'] = false;
// $login_swal = false;
// $admin = "Coincoin-666";
// $password = '$2y$10$vu0NR244UAyHDO.bQqsGoOUdhimLV/I6ddhuFTvlSGf/Jz4MQ8JF6';

// Add a new picture.
// Why so serious? The name's a joke.
if ($_SERVER['REQUEST_METHOD'] == "POST" && count($_POST) > 0) {
    if (isset($_FILES['send_nudes']) && $_FILES['send_nudes']['name'] != NULL && $_FILES['send_nudes']['error'] == 0) {
        $img_i = mime_content_type($_FILES['send_nudes']['tmp_name']);
        if (!in_array($img_i, $valid_format)) {
            $img_error['format_err'] = "Please only send .png pictures. It's written right above.";
        } elseif ($_FILES['send_nudes']['size'] > 8000000) {
            $pics_error['size_err'] = "Please be sure to upload pictures below 8MiB.";
        } else {
            $screenshot = rename_img($_FILES['send_nudes']['name']);
            move_uploaded_file($_FILES['send_nude']['tmp_name'], $img_dir . $screenshot);
        }
    } elseif (isset($_FILES['send_nudes']) && $_FILES['send_nudes']['name'] != NULL && $_FILES['send_nudes']['error'] == 2) {
        $pics_error['size_err'] = "Please be sure to upload pictures below 8MiB.";
    }
}

// if (isset($_POST['add_brand_logo_btn']) && !empty($_FILES)) {
//     $logo = $_FILES['uploadedfile']['name'];
//     $tmpname = $_FILES['uploadedfile']['tmp_name'];
//     $file_type = mime_content_type($_FILES['uploadedfile']['tmp_name']);
    
//     if (!in_array($fileInfo, $validImages)) {
//         $img_error['format_err'] = "Please upload only [dot]png files.";
//     } else if ($_FILES['uploadedfile']['size'] > 8000000) {
//         $img_error['size_err'] = "Please upload less than 8Mb files.";
//     } else if (isset($_FILES['uploadedfile']) && $_FILES['fileToUpload']['name'] != NULL && $_FILES['uploadedfile']['error'] == 2) {
//         $img_error['size_err'] = "Please upload less than 8Mb files.";
//     } else {
//         // $logo_obj = rename_img($logo);
//         // $logo_obj = new Vehicles();
//         // $logo_obj->add_logo($logo);
//         // move_uploaded_file($logo_obj, $img_dir);
//     }
// }




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