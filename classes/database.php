<?php
    session_start();
    class Database{
        private $servername = "localhost";
        private $username = "root";
        private $password = ""; // if you are using mac : root
        private $database_name ="ACOS";
        public $conn;



        public function __construct(){
            $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database_name);

        if($this->conn ==TRUE){
            return $this->conn;
        }else{
            die('ERROR: '.$this->conn->connect_error);
        }
        }
    }







?>