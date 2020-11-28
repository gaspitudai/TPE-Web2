<?php

    require_once 'php/model/comment.model.php';
    require_once 'php/API/view/API.view.php';
    require_once 'php/API/controller/API.controller.php';

    class APICommentController extends APIController {

        private $model;
        private $view;

        function __construct() {
            parent::__construct();
            $this->model = new CommentModel();
            $this->view = new APIView();
        }

        public function getAll() {
            $comments = $this->model->getAll();
            $this->view->response($comments, 200);
        }
        
        public function postComment() {
            $body = $this->getData();
            $id = $this->model->postComment($body->description, $body->user_id, $body->score);
            if($id)
                $this->view->response( $this->model->getCommentByID($id), 200);
            else
                $this->view->response("Comment has not posted", 404);
        }

        /*
        
        public function addUser() {
            $body = $this->getData();
            $id = $this->model->addUserFromAPI($body->name,$body->email,$body->password,$body->clearence);
            if($id)
                $this->view->response( $this->model->getUserByID($id), 200);
            else
                $this->view->response("User has not insert", 404);
        }
        
        public function getUser($params = null) {
            $id = $params[':ID'];
            $user = $this->model->getUserByID($id);
            if ($user)
                $this->view->response($user, 200);
            else
                $this->view->response("User $id do not exist :(", 404);   
        }

        public function deleteUser($params = null) {
            $id = $params[':ID'];
            $result =  $user = $this->model->deleteUserFromAPI($id);
            if($result > 0)
                $this->view->response("User $id has deleted", 200);
            else
                $this->view->response("User $id do not exist :(", 404);
        }

        public function updateUser($params = null) {
            $id = $params[':ID'];
            $body = $this->getData();
            $user = $this->model->getUserByID($id);
            if (empty($user)) {
                $this->view->response("User $id do not exist :(", 404);
            }else {
                $result = $this->model->updateUserFromAPI($body->name,$body->email,$body->password,$body->clearence,$id);
                if($result > 0)
                    $this->view->response( $this->model->getUserByID($id), 200);
                else
                    $this->view->response("User $id has not update :(", 204);
            }
        }

        public function addUser() {
            $body = $this->getData();
            $id = $this->model->addUserFromAPI($body->name,$body->email,$body->password,$body->clearence);
            if($id)
                $this->view->response( $this->model->getUserByID($id), 200);
            else
                $this->view->response("User has not insert", 404);
        }
        */
    }