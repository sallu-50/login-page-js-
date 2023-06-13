<?php
include 'lib/database.php';


class Login{

    public $db;

    public function __construct()
    {
        $this->db = new Database();
        
    }

    public function LoginUser($email ,$password ){

        if ( empty($email) || empty($password)) {
            $msg = "Fields must not be empty";
            return $msg;
        }else {
            $select = "SELECT * FROM register WHERE email = '$email' AND password ='$password' ";
            $result = $this->db->select($select);

            if ($result) {
                header('location:index.php');

            }else {
                $msg = "invalid email or password ";
                return $msg;
            }
        }







    }
}
?>