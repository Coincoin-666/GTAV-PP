<?php
require "database.php";

/**
 * Vehicles Class.
 */
class Vehicles extends Database {
    public function get_brand_names_and_id() {
        $db = $this->connectDatabase();
        $q = "SELECT `brand_name`,`brand_logo_id`,`vehicles_brand_id`,`brand_logo_path` FROM `vehicles_brand_logo` NATURAL JOIN `vehicles_brands`;";
        $get_brand_names_and_id_q = $db->query($q);
        $get_brand_names_and_id = $get_brand_names_and_id_q->fetchAll();
        return $get_brand_names_and_id;
    }

    public function get_brand_infos() {
        $db = $this->connectDatabase();
        $q = "SELECT * FROM `vehicles_brands` NATURAL JOIN `vehicles_brand_logo` ORDER BY `brand_name`;";
        $get_brand_infos_q = $db->query($q);
        $get_brand_infos = $get_brand_infos_q->fetchAll();
        return $get_brand_infos;
    }

    public function add_vehicle() {
        $db = $this->connectDatabase();
        $q = "INSERT INTO `vehicles` (`model`,`terrain`,`v_type`,`spec_table`) VALUES (':model',':terrain',':v_type',':spec_table');";
    }

}