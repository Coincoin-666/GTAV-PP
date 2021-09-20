<?php

function sanitizeData($data) {
    $newData = strtolower($data);
    $newData = trim($newData);
    $newData = ucfirst($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}

// function rename($tmpname) {
//     $ext = explode(".", $tmpname);
//     $rn_img = uniqid() . "." . $ext[1];
//     return $rn_img;
// }