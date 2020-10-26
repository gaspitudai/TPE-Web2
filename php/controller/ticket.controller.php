<?php

    require_once 'php/model/ticket.model.php';
    require_once 'php/controller/category.controller.php';
    require_once 'php/view/ticket.view.php';

    class TicketController {

        private $model;
        private $categoryCtrl;
        private $view;
        private $allTickets;
        private $allCategories;
        private $ticketsData;
        private $quantityTicketsByCategory;
        
        function __construct() {
            $this->model = new TicketModel();
            $this->categoryCtrl = new CategoryController();
            $this->view = new TicketView();
            $this->allTickets = $this->getAllTickets();
            $this->allCategories = $this->categoryCtrl->getCategories();
            $this->ticketsData = $this->getTicketsData();
            $this->quantityTicketsByCategory = $this->categoryCtrl->getQuantityTicketsByCategory();
        }

        function getAllTickets() {
            return $this->model->getTickets();
        }

        function getTicketsData() {
            return array($this->allTickets, $this->allCategories);
        }

        function getHome() {
            $this->view->renderHome($this->allTickets, $this->ticketsData, $this->quantityTicketsByCategory);
        }

        function getTicketsByCategory($params = null) {
            $category_id = $params[':ID'];
            $ticketsByCategory = $this->model->getTickets($category_id);
            $this->view->renderTicketsByCategory($ticketsByCategory, $params);
        }

        function showAllTickets() {
            $this->view->renderAllTickets($this->allTickets, $this->quantityTicketsByCategory);
        }

        function getTicketDetails($params = null) {
            $ticket_id = $params[':ID'];
            $ticket = $this->model->getTicket($ticket_id);
            $this->view->renderTicketDetails($ticket);
        }

/* ADMIN */

        function addTicket() {
            $name = $_POST['name'];
            $date = $_POST['date'];
            $category = $_POST['category'];
            $count = $_POST['count'];
            if( isset($name) && !empty($name) &&
                isset($date) && !empty($date) &&
                isset($category) && !empty($category) &&
                isset($count) && !empty($count))
            {
                for($i=0; $i<$count; $i++) {
                    $this->model->addTicket($name, $date, $category);
                }
                header('Location: '.ADMIN);
            }
        }

        function deleteTicket($params = null) {
            $id_ticket = $params[':ID'];
            $this->model->deleteTicket($id_ticket);
            header('Location: '.ADMIN);
        }

        function updateTicket() {
            $name = $_POST['name'];
            $date = $_POST['date'];
            $id_category = $_POST['category'];
            $id_ticket = $_POST['id_ticket'];
            if( isset($name) && !empty($name) &&
                isset($date) && !empty($date) &&
                isset($id_category) && !empty($id_category) &&
                isset($id_ticket) && !empty($id_ticket))
            {
                $this->model->updateTicket($name, $date, $id_category, $id_ticket);
                header('Location: '.ADMIN);
            }
        }

    }