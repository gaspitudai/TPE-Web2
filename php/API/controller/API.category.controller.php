<?php

    require_once 'php/model/category.model.php';
    require_once 'php/API/view/API.view.php';

    class APICategoryController {

        private $categoryModel;
        private $view;

        function __construct() {
            $this->categoryModel = new CategoryModel();
            $this->view = new APIView();
        }

        function getAll() {
            $categories = $this->categoryModel->getCategories();
            $this->view->response($categories, 200);
        }

        function getCategory($params = null) {
            $id = $params[':ID'];
            $category = $this->categoryModel->getCategory($id);
            if ($category)
                $this->view->response($category, 200);
            else
                $this->view->response("Category $id do not exist", 404);   
        }
        

    }