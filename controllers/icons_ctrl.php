<?php
require "../models/_icons.php";
require "../tools/functions.php";

$icon_error = [];
$icon_dir = "/Applications/MAMP/htdocs/HOLYFUCKINGSHIT/GTAV-PP/assets/imgs/icons/";
$trueSvg = ['svg' => 'image/svg'];

if ($_SERVER['REQUEST_METHOD'] == "POST" && count($_POST) > 0) {
    if (isset($_FILES['new_icon']) && $_FILES['new_icon']['name'] != NULL && $_FILES['new_icon']['error'] == 0) {
        $icon_i = mime_content_type(realpath($_FILES['new_icon']['tmp_name']));
        if (!in_array($icon_i, $trueSvg)) {
            $icon_error['format_err'] = "<p>Please only send .svg files</p>";
        } elseif ($_FILES['new_icon']['size'] > 8000000) {
            $icon_error['size_err'] = "<p>Please be sure to upload pictures under 8MiB. Again: Right above.</p>";
        }
        //¡¡¡Need an img checker to see if it already exists!!!//
        else {
            $icon_path = "/assets/imgs/icons/";
            $icon_uniqid = rename_icon($_FILES['new_icon']['name']);
            $icon_name = $_POST['icon_name'];
            if (!empty($_FILES) && count($icon_error) == 0) {
                if ($icon_i == 'image/svg') {
                    $icon_obj = new Icon();
                    $icon_saved = $icon_obj->save_icon($icon_name, $icon_uniqid, $icon_path);
                    move_uploaded_file($_FILES['new_icon']['tmp_name'], $icon_dir . $icon_uniqid);
                }
            }
        }
    }
} elseif (isset($_FILES['new_icon']) && $_FILES['new_icon']['name'] != NULL && $_FILES['new_icon']['error'] == 2) {
    $img_error['size_err'] = "Please be sure to upload pictures under 8MiB.";
}

// All icons //
$icon_array_obj = new Icon();
$icon_array = $icon_array_obj->get_icons_array();

// One icon by name //
$icon_obj = new Icon();
$icon = $icon_obj->get_one_icon($icon_name);