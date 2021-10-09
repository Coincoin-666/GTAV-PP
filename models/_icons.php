<?php
require "_pics.php";

class Icon extends Image {
    public function save_icon($icon_path, $icon_uniqid, $icon_name) {
        $db = $this->connectDatabase();
        $q = "INSERT INTO `icons` (`icon_name`,`icon_uniqid`,`icon_path`) VALUES (:icon_path, :icon_uniqid, :icon_name);";
        $save_icon_q = $db->prepare($q);
        $save_icon_q->bindValue(':icon_path', $icon_path, PDO::PARAM_STR);
        $save_icon_q->bindValue(':icon_uniqid', $icon_uniqid, PDO::PARAM_STR);
        $save_icon_q->bindValue(':icon_name', $icon_name, PDO::PARAM_STR);
        $save_icon_q->execute();
    }
    public function get_icons_array() {
        $db = $this->connectDatabase();
        $q = "SELECT CONCAT(`icon_path`,`icon_uniqid`) AS `i_path` FROM `icons`;";
        $get_i_q = $db->query($q);
        $get_icons_array = $get_i_q->fetchAll();
        return $get_icons_array;
    }
    public function get_one_icon() {
        $db = $this->connectDatabase();
        $q = "SELECT CONCAT(`icon_path`,`icon_uniqid`) AS `i_path` FROM `icons` WHERE `icon_name`=:icon_name;";
        $get_one_i_q = $db->prepare($q);
        $get_one_i_q->bindValue(':icon_name', PDO::PARAM_STR);
        $get_one_i_q->execute();
        $get_one_icon = $get_one_i_q->fetch();
        return $get_one_icon;
    }
}