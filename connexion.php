<?php

    class Connexion {

            private String $servename;
            private $username;
            private $password;
            private $dbname;
            private $conn

            protected function connect() {
                $this->servename = "localhost";
                $this->username = "root";
                $this->password = "";
                $this->dbname = "youarticles";

                $this->conn = new PDO($this->servename , $this->username , $this->password , $this->dbname);
                return $this->conn;
            }
    }
?>