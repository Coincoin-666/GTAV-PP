<?php
require "../models/vehicles.php";
require "../tools/php/functions.php";

$error = [];

$img_dir = "../assets/imgs/vehicles/brands_logo";

// List available vehicle brands.
$get_brand_names_and_id_obj = new Vehicles();
$get_brand_names_and_id = $get_brand_names_and_id_obj->get_brand_names_and_id();

// Display one brand characteristics.
// $get_one_vehicle_infos_obj = new Vehicles();
// $get_one_vehicle_infos = $get_one_vehicle_infos_obj->get_one_vehicle_infos();

// Get the brand's country of origin.
$get_brand_origin_obj = new Vehicles();
$get_brand_origin = $get_brand_origin_obj->get_brand_origin();

// Get the brand's category.
$get_brand_category_obj = new Vehicles();
$get_brand_category = $get_brand_category_obj->get_brand_category();




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