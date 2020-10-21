<?php

    require_once 'php/model/user.model.php';
    require_once 'php/API/view/API.view.php';

    class APIUserController {

        private $userModel;
        private $view;

        function __construct() {
            $this->userModel = new UserModel();
            $this->view = new APIView();
        }

        function getAll() {
            $users = $this->userModel->getAllUsers();
            $this->view->response($users, 200);
        }

        function getUser($params = null) {
            $id = $params[':ID'];
            $user = $this->userModel->getUserByID($id);
            if($user)
                $this->view->response($user, 200);
            else
                $this->view->response("User $id do not exist", 404);   
        }
        

    }