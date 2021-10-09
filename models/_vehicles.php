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

    public function add_vehicle($model, $terrain, $v_type, $spec_table, $vehicle_brand_id) {
        $db = $this->connectDatabase();
        $q = "INSERT INTO `vehicles` (`model`,`terrain`,`v_type`,`spec_table`,`vehicles_brand_id`) VALUES (:model, :terrain, :v_type, :spec_table, :vehicle_brand_id);";
        $add_v_q = $db->prepare($q);
        $add_v_q->bindValue(':model', $model, PDO::PARAM_STR);
        $add_v_q->bindValue(':terrain', $terrain, PDO::PARAM_STR);
        $add_v_q->bindValue(':v_type', $v_type, PDO::PARAM_STR);
        $add_v_q->bindValue(':spec_table', $spec_table, PDO::PARAM_STR);
        $add_v_q->bindValue(':vehicle_brand_id', $vehicle_brand_id, PDO::PARAM_STR);
        $add_v_q->execute();
    }

}