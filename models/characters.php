<?php
require "database.php";
/**
 * Class used to determine which character is playing the mission.
 * Will be even more useful when we get to the online part. In 16 years or so.
 * 
 * Also: I need a complete f*ck!ng CRUD.
 */
class Character extends Database {
    // Create
    public function add_character($char_fname, $char_lname) {
        $db = $this->connectDatabase();
        $q = "INSERT INTO `playable_characters` (`char_fname`,`char_lname`) VALUES (:char_fname, :char_lname);";
        $add_char_q = $db->prepare($q);
        $add_char_q->bindValue(':char_fname', $char_fname, PDO::PARAM_STR);
        $add_char_q->bindValue(':char_lname', $char_lname, PDO::PARAM_STR);
        $add_char_q->execute();
    }

    // Read_(All)
    public function list_characters() {
        $db = $this->connectDatabase();
        $q = "SELECT * FROM `playable_characters`;";
        $list_characters_q = $db->query($q);
        $list_characters = $list_characters_q->fetchAll();
        return $list_characters;
    }

    // Read_(One)
    public function infos_character($char_id) {
        $db = $this->connectDatabase();
        $q  = "SELECT * FROM `playable_characters` WHERE `char_id`=:char_id;";
        $i_char_q = $db->prepare($q);
        $i_char_q->bindValue(':char_id', $char_id, PDO::PARAM_INT);
        $i_char_q->execute();
        $infos_character = $i_char_q->fetch();
        return $infos_character;
    }

    // Update
    public function update_character($char_fname, $char_lname, $char_id) {
        $db = $this->connectDatabase();
        $q = "UPDATE `playable_characters` SET `char_fname`=:char_fname AND `char_lname`=:char_lname WHERE `char_id`=:char_id;";
        $up_char_q = $db->prepare($q);
        $up_char_q->bindValue(':char_fname', $char_fname, PDO::PARAM_STR);
        $up_char_q->bindValue(':char_lname', $char_lname, PDO::PARAM_STR);
        $up_char_q->bindValue(':char_id', $char_id, PDO::PARAM_INT);
        $up_char_q->execute();
    }
}