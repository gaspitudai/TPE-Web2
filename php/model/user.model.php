<?php

    require_once 'php/model/connection.model.php';

    class UserModel {

        private $db;

        function __construct() {
            $connection = new Connection();
            $this->db = $connection->getConnection();
        }

        function getAllUsers() {
            $query = $this->db->prepare('SELECT * FROM users');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
     
        function getUser($userName){
            $query = $this->db->prepare("SELECT * FROM users WHERE name=?");
            $query->execute(array($userName));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function addUser($name, $email, $password) {
            $query = $this->db->prepare('INSERT INTO users(name, email, password) VALUES(?, ?, ?)');
            $query->execute(array($name, $email, $password));
        }
        
    }