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
     
        function getUserByID($user_id){
            $query = $this->db->prepare("SELECT * FROM users WHERE user_id=?");
            $query->execute(array($user_id));
            return $query->fetch(PDO::FETCH_OBJ);
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

// API
        
        function deleteUserFromAPI($user_id){
            $query = $this->db->prepare("DELETE FROM users WHERE user_id=?");
            $query->execute(array($user_id));
            return $query->rowCount();
        }

        function updateUserFromAPI($name, $email, $password, $clearence, $id){
            $query = $this->db ->prepare('UPDATE users SET name=?, email=?, password=?, clearence=? WHERE user_id=?');
            $query->execute(array($name, $email, $password, $clearence, $id));
            return $query->rowCount();
        }
        
        function addUserFromAPI($name, $email, $password, $clearence){
            $query = $this->db->prepare('INSERT INTO users(name, email, password, clearence) VALUES(?, ?, ?, ?)');
            $query->execute(array($name, $email, $password, $clearence));
            return $this->db->lastInsertId();
        }
        
    }