<?php
require "database.php";






// class Admin extends Database {
//     // protected function get_admin_cred() {
//     //     $database = $this->connectDatabase();
//     //     $pseudonymn_q = "SELECT `pseudonymn` FROM `USERS`;";     
//     // }
//     public function login($pseudonymn, $password) {
//         $database = $this->connectDatabase();
//         $pseudonymn = "SELECT `pseudonymn` FROM `USERS`";
//         $password = "SELECT `password` FROM `USERS`";
//         $login_q_ps = $database->query($password);
//         $login_q_pwd = $database->query($password);
//         $pseudonymn = $login_q_ps->fetch();
//         $password = $login_q_pwd->fetch();
//         $login = [$pseudonymn, $password];
//         return $login;
//     }
// }
/**
 * Class user
 * -extends db
 * -user objects will depends on this one
 */
// class Admin extends Database {
//     public function addUser($pseudonymn, $email, $user_role, $password) {
//         $database = $this->connectDatabase();
//         $query = "INSERT INTO `USERS` (`pseudonymn`, `email`, `user_role`, `password`) VALUES (:pseudonymn, :email, :user_role, :password)";
//         $addUser = $database->prepare($query);
//         $addUser->bindValue(':pseudonymn', sanitizeData($pseudonymn), PDO::PARAM_STR);
//         $addUser->bindValue(':email', htmlspecialchars($email), PDO::PARAM_STR);
//         $addUser->bindValue(':user_role', $user_role, PDO::PARAM_STR);
//         $addUser->bindValue(':password', $password, PDO::PARAM_STR);
//         $addUser->execute();
//     }
//     // Check if user in db based on log input
//     /**
//      * @var string $pseudonymn
//      * @var string $password
//      */
//     protected function check_user_existence($pseudonymn, $password) {
//         $database = $this->connectDatabase();
//         $pseudonymn = $_POST['pseudonymn'];
//         $password = password_verify($_POST['password'], ':password');
//         $chk_usr_q = "SELECT `pseudonymn` FROM `USERS` WHERE `pseudonymn`=$pseudonymn AND `password`=$password";
//         $chk_usr = $database->prepare($chk_usr_q);
//         $chk_usr->bindValue(':pseudonymn', $pseudonymn, PDO::PARAM_STR);
//         $chk_usr->bindValue(':password', $password, PDO::PARAM_STR);
//         $chk_usr->execute();
//     }
// }