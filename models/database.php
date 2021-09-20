<?php
/**
 * Class Database, enable connection to db
 * Allow to create a quick connection function.
 */
class Database {
    private $dbname = "gtadb";
    private $usr = "root";
    private $pwd = "root";

    protected function connectDatabase() {
        try {
            $db = new PDO("mysql:host=localhost;dbname=$this->dbname;charset=utf8", $this->usr, $this->pwd);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch(PDOException $error) {
            die('error: ' . $error->getMessage());
        }
    }
}