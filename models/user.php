<?php
require "database.php";

/**
 * User class
 * User is an instance of Database.
 */
class User extends Database {
    public function add_user($username, $password) {
    $db = $this->connectDatabase();
    $q = "INSERT INTO `users` (`username`,`password`) VALUES (:username, :password)";
    $add_q = $db->prepare($q);
    $add_q->bindValue(':username', $username, PDO::PARAM_STR);
    $add_q->bindValue(':password', $password, PDO::PARAM_STR);
    $add_q->execute();
    }
    public function authentication() {
        if (isset($_POST['login_btn'])) {
            $db = $this->connectDatabase();
            $q = "SELECT `username` FROM `user`";
        }
    }
}