<?php
require "../models/_vehicles.php";
require "../tools/functions.php";

$error = [];

// List available vehicle brands.
$get_brand_names_and_id_obj = new Vehicles();
$get_brand_names_and_id = $get_brand_names_and_id_obj->get_brand_names_and_id();

// Get brand characteristics.
$get_brand_infos_obj = new Vehicles();
$get_brand_infos = $get_brand_infos_obj->get_brand_infos();

// New Vehicle.
    if (isset($_POST['add_vehicle_btn'])) {
        $model = $_POST['model'];
        $terrain = $_POST['terrain'];
        $v_type = $_POST['v_type'];
        $spec_table = $_POST['spec_table'];
        $vehicle_brand_id = $_POST['vehicle_brand_id'];
        $new_vehicle = new Vehicles();
        $vehicle = $new_vehicle->add_vehicle($model, $terrain, $v_type, $spec_table, $vehicle_brand_id);
    }







// Go to add_vehicle page w/ vehicle characteristics.
// if (isset($_GET['add_vehicle_from_brand']) && count($error) == 0) {
//     $logo = $get_brand_infos['brand_logo_path'];
//     $brand = $get_brand_infos['brand_name'];
//     $origin = $get_brand_infos['brand_origin'];
//     $infos = $get_brand_infos['brand_category'];
//     $brand_infos_obj = new Vehicles();
//     $brand_infos = $brand_infos_obj->get_brand_infos();
// }