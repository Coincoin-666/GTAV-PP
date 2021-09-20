<?php
require "../models/user.php";
require "../tools/php/functions.php";

// Variables declaration //
$error = [];
// $add_success = json_encode($add_success = false);
$reg_n = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+.?)/mi";


/**
 * Adding an admin user with input verification.
 */
if (isset($_POST['add_user_btn'])) {
    // If username is not valid or password do not match.
    if (!preg_match($reg_n, $_POST['username'])) {
        $error['usr_err'] = "Please choose a valid username. Some character may not be authorized.";
    } else if ($_POST['password'] != $_POST['confirm_password']) {
        $error['pwd_err'] = "Passwords do not match.";
    }
    $usr = sanitizeData($_POST['username']);
    $pwd = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $user_obj = new User();
    $user_obj->add_user($usr, $pwd);
}