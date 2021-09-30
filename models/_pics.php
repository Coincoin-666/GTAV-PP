<?php
require "database.php";

class Image extends Database {
    public function save_img_in_db($uploaded_img_path, $img_uniqid, $img_caption) {
        $db = $this->connectDatabase();
        $q = "INSERT INTO `uploaded_img` (`uploaded_img_path`,`img_uniqid`, `img_caption`) VALUES (:uploaded_img_path, :img_uniqid, :img_caption);";
        $save_img_in_db_q = $db->prepare($q);
        $save_img_in_db_q->bindValue(':uploaded_img_path', $uploaded_img_path, PDO::PARAM_STR);
        $save_img_in_db_q->bindValue(':img_uniqid', $img_uniqid, PDO::PARAM_STR);
        $save_img_in_db_q->bindValue(':img_caption', $img_caption, PDO::PARAM_STR);
        $save_img_in_db_q->execute();
    }
    public function get_img_path() {
        $db = $this->connectDatabase();
        $q = "SELECT CONCAT(`uploaded_img_path`,`img_uniqid`) FROM `uploaded_img`;";
        $get_img_q = $db->query($q);
        $img_path = $get_img_q->fetchAll();
        return $img_path;
    }
    
}