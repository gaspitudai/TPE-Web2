<?php

    require_once 'php/model/ticket.model.php';
    require_once 'php/model/category.model.php';
    require_once 'php/model/user.model.php';
    require_once 'php/API/view/API.view.php';

    class APIController {

        private $ticketModel;
        private $categoryModel;
        private $userModel;
        private $view;

        function __construct() {
            $this->ticketModel = new TicketModel();
            $this->categoryModel = new CategoryModel();
            $this->userModel = new UserModel();
            $this->view = new APIView();
        }

        function getAll() {
            $tickets = $this->ticketModel->getTickets();
            $categories = $this->categoryModel->getCategories();
            $users = $this->userModel->getAllUsers();
            $allData = array(
                'Tickets' => $tickets,
                'Categories' => $categories, 
                'Users' => $users
            );
            $this->view->response($allData, 200);
        }

    }