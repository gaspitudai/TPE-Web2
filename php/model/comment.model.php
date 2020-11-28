<?php

    require_once 'php/model/connection.model.php';

    class CommentModel {

        private $db;

        function __construct() {
            $connection = new Connection();
            $this->db = $connection->getConnection();
        }

        function getAll() {
            $query = $this->db ->prepare("SELECT comment.*, users.name as user_name FROM comment INNER JOIN users ON comment.user_id = users.user_id");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function postComment($description, $user_id, $score) {
            $query = $this->db->prepare('INSERT INTO comment(description, user_id, score) VALUES(?, ?, ?)');
            $query->execute(array($description, $user_id, $score));
           // return $this->db->lastInsertId();
            return $query->rowCount();
        }
        
        function getCommentByID($comment_id){
            $query = $this->db->prepare("SELECT * FROM comment WHERE comment_id=?");
            $query->execute(array($comment_id));
            return $query->fetch(PDO::FETCH_OBJ);
        }
     /*
     
        function getUser($userName){
            $query = $this->db->prepare("SELECT * FROM users WHERE name=?");
            $query->execute(array($userName));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function addUser($name, $email, $password, $clearence) {
            $query = $this->db->prepare('INSERT INTO users(name, email, password, clearence) VALUES(?, ?, ?, ?)');
            $query->execute(array($name, $email, $password, $clearence));
        }

//ADMIN

        function updateUserClearence($user_id, $clearence) {
            $query = $this->db ->prepare('UPDATE users SET clearence=? WHERE user_id=?');
            $query ->execute(array($clearence, $user_id));
        }
        
        function deleteUser($user_id) {
            $query = $this->db->prepare('DELETE FROM users WHERE user_id=?');
            $query->execute(array($user_id));
        }

//API
        
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
        */
        
    }