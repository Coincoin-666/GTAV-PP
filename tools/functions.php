<?php

$reg_n = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+.?)/mi";

$img_dir = "/assets/imgs/screenshots/";

function sanitizeData($data) {
    $newData = strtolower($data);
    $newData = trim($newData);
    $newData = ucfirst($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}

function rename_img($tmpname) {
    $ext = explode(".", $tmpname);
    $rename_img = uniqid() . "." . $ext[1];
    return $rename_img;
}