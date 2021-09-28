<?php
$reg_n = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+.?)/mi";


function sanitizeData($data) {
    $newData = strtolower($data);
    $newData = trim($newData);
    $newData = ucfirst($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}

function rename_img() {
    $ext = explode(".", $_FILES['send_nudes']['name']);
    $rename_img = uniqid() . "." . $ext[1];
    return $rename_img;
}

// function rename_screenshot_with_path($img_saved) {
//     $rename_screenshot_with_path = $path . $img_saved;
//     return $rename_screenshot_with_path;
// }

// Session/Login functions.
// $_SESSION['error'] = [];
// $_SESSION['admin'] = false;
// $login_swal = false;