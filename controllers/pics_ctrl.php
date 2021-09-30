<?php
require "../models/_pics.php";
require "../tools/functions.php";
// session_start()
/**
 * Aim at regrouping all admin involved controls.
 * Works with functions.php & login.php.
 */
$img_error = [];
$img_dir = "/Applications/MAMP/htdocs/GTAV–tests/assets/imgs/screenshots/";
$svg_dir = "/Applications/MAMP/htdocs/GTAV-test/assets/imgs/svg/";

$valid_format = [
    'png'=>'image/png',
    'svg'=>'image/svg+xml'
];


// Add a new picture.
// Why so serious. Come on, name's just a joke.
if ($_SERVER['REQUEST_METHOD'] == "POST" && count($_POST) > 0) {
    if (isset($_FILES['send_nudes']) && $_FILES['send_nudes']['name'] != NULL && $_FILES['send_nudes']['error'] == 0) {
        $img_i = mime_content_type(realpath($_FILES['send_nudes']['tmp_name']));
        if (!in_array($img_i, $valid_format)) {
            $img_error['format_err'] = "Please only send .png pictures. It's written right above.";
        } elseif ($_FILES['send_nudes']['size'] > 8000000) {
            $img_error['size_err'] = "Please be sure to upload pictures under 8MiB. Again: Right above.";
        }

        //¡¡¡Need an img checker to see if it already exists!!!//

        else {
            $uploaded_img_path = "/assets/imgs/screenshots/";
            $img_uniqid = rename_img($_FILES['send_nudes']['name']);
            $img_caption = sanitizeData($_POST['img_caption']);
            $img_obj = new Image();
            $img_saved = $img_obj->save_img_in_db($uploaded_img_path, $img_uniqid, $img_caption);
            if (!empty($_FILES) && $img_i == 'image/png') {
                move_uploaded_file($_FILES['send_nudes']['tmp_name'], $img_dir . $img_uniqid);
            } elseif (!empty($_FILES) && $img_i == 'image/svg+xml') {
                move_uploaded_file($_FILES['send_nudes']['tmp_name'], $svg_dir . $img_uniqid);
            }
        }
    } elseif (isset($_FILES['send_nudes']) && $_FILES['send_nudes']['name'] != NULL && $_FILES['send_nudes']['error'] == 2) {
        $img_error['size_err'] = "Please be sure to upload pictures under 8MiB.";
    }
}

// Get an array of images path.
$img_path_obj = new Image();
$img_path_array = $img_path_obj->get_img_path();




// Set img path for display from db table `uploaded_img`.
// if (function_exists('get_image()')) {
//     function set_path() {
//         $set_path = "/assets/imgs/screenshots/";
//         return $set_path;
//     }  
// }

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