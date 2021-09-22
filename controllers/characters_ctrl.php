<?php
require "../models/characters.php";
require "../tools/php/functions.php";

// Errors array //
$error = [];

// SWAL //
$add_char_success = false;
$edit_char_success = false;

/**
 * List all characters present in the database.
 */
$list_all_characters_obj = new Character();
$list_all_characters = $list_all_characters_obj->list_characters();

/**
 * Create a new character in the database.
 */
if (isset($_POST['add_char_btn']) && count($error) == 0) {
    if (!preg_match($reg_n, $_POST['char_fname']) || !preg_match($reg_n, $_POST['char_lname'])) {
        $error['char_err'] = "Please enter valid names. Some characters may not be authorized.";
    } 
    $char_fname = sanitizeData($_POST['char_fname']);
    $char_lname = sanitizeData($_POST['char_lname']);
    $char_obj = new Character();
    $char_obj->add_character($char_fname, $char_lname);
    $add_char_success = true;
}

/**
 * Character infos w/ char_id.
 */
if (isset($_GET['char_id'])) {
    $infos_character_obj = new Character();
    $infos_character = $infos_character_obj->infos_character($_GET['char_id']);
}

/**
 * Update character.
 */
if (isset($_POST['edit_char_btn']) && count($error) == 0) {
    $char_fname = $_POST['char_fname'];
    $char_lname = $_POST['char_lname'];
    $up_char_obj = new Character();
    $up_char_obj->update_character($char_fname, $char_lname, $_GET['char_id']);
    $infos_character_obj = $infos_character->infos_character($_GET['char_id']);
    $edit_char_success = true;
    header('Location: list_characters.php');
}