<?php

class DB {

    private $id;
    private $username;
    public $db;
    private $user_id;
    private $db_host = "127.0.0.1:3306";
    private $db_name = "test";
    private $db_user = "root";
    private $db_pass = "";
    private $is_authorized = false;

    public function __construct($username = null, $password = null) {
        $this->username = $username;
        try {
            $this->db = new \pdo("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
        } catch (\pdoexception $e) {
            echo "database error: " . $e->getmessage();
            die('lol');
        }
    }

    public function connectdb() {

        return $this->db;
    }

}
