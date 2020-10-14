<?php

    require_once 'php/model/connection.model.php';

    class CategoryModel {

        private $db;

        function __construct() {
            $connection = new Connection();
            $this->db = $connection->getConnection();
        }
        
        function getCategories($id_category = null) {
            $query = $this->db->prepare('SELECT * FROM category');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        
        function addCategory($name, $price, $id_category) {
            $query = $this->db->prepare('INSERT INTO category(name, price, id_category) VALUES(?, ?, ?)');
            $query->execute(array($name, $price, $id_category));
        }
        
        function deleteCategory($id_category) {
            $query = $this->db->prepare('DELETE FROM category WHERE id_category=?');
            $query->execute(array($id_category));
        }

        function updateCategory($name, $price, $id_category) {
            $query = $this->db ->prepare('UPDATE category SET name=?, price=? WHERE id_category=?');
            $query ->execute(array($name, $price, $id_category));
        }
        
    }