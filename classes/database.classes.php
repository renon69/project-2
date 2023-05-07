<?php

class Dbh {
    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysqli:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}