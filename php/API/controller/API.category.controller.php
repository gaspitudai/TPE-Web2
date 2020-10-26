<?php

    require_once 'php/model/category.model.php';
    require_once 'php/API/view/API.view.php';
    require_once 'php/API/controller/API.controller.php';

    class APICategoryController extends APIController {

        private $categoryModel;
        private $view;

        function __construct() {
            parent::__construct();
            $this->categoryModel = new CategoryModel();
            $this->view = new APIView();
        }

        public function getAll() {
            $categories = $this->categoryModel->getCategories();
            $this->view->response($categories, 200);
        }

        public function getCategory($params = null) {
            $id = $params[':ID'];
            $category = $this->categoryModel->getCategory($id);
            if ($category)
                $this->view->response($category, 200);
            else
                $this->view->response("Category $id do not exist :(", 404);   
        }

        public function deleteCategory($params = null) {
            $id = $params[':ID'];
            $result =  $category = $this->categoryModel->deleteCategoryFromAPI($id);
            if($result > 0)
                $this->view->response("Category $id has deleted", 200);
            else
                $this->view->response("Category $id do not exist :(", 404);
        }

        public function updateCategory($params = null) {
            $id = $params[':ID'];
            $body = $this->getData();
            $category = $this->categoryModel->getCategory($id);
            if (empty($category)) {
                $this->view->response("Category $id do not exist :(", 404);
            }else {
                $result = $this->categoryModel->updateCategoryFromAPI($body->name,$body->price,$id);
                if($result > 0)
                    $this->view->response( $this->categoryModel->getCategory($id), 200);
                else
                    $this->view->response("Category $id has not update :(", 204);
            }
        }

        public function addCategory() {
            $body = $this->getData();
            $id = $this->categoryModel->addCategoryFromAPI($body->name,$body->price);
            if($id)
                $this->view->response( $this->categoryModel->getCategory($id), 200);
            else
                $this->view->response("Category has not insert", 404);
        }
        

    }