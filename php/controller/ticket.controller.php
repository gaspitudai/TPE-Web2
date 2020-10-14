<?php

    require_once 'php/model/ticket.model.php';
    require_once 'php/model/category.model.php';
    require_once 'php/view/ticket.view.php';

    class TicketController {

        private $ticketModel;
        private $categoryModel;
        private $view;
        private $allTickets;
        private $ticketsData;
        private $countTickets;

        function __construct() {
            $this->ticketModel = new TicketModel();
            $this->categoryModel = new CategoryModel();
            $this->view = new TicketView();
            $this->allTickets = $this->getAllTickets();
            $this->ticketsData = $this->getTicketsData();
            $this->countTickets = $this->getCountTickets();
        }

        function getAllTickets() {
            return $tickets = $this->ticketModel->getTickets();
        }

        function getTicketsData() {
            $tickets = $this->ticketModel->getTickets();
            $categories = $this->categoryModel->getCategories();
            return array($tickets, $categories);
        }
        
        function getCountTickets() {
            $tickets = $this->ticketModel->getTickets();
            $categories = $this->categoryModel->getCategories();
            $catCounts = array();
            $numId = 0;
            for($i=0; $i<count($categories); $i++) {
                $ticketsCount = 0;
                $numId++;
                foreach($tickets as $ticket) {
                    if($ticket->id_category == $numId) {
                        $ticketsCount++;
                    }
                }
                array_push($catCounts, $ticketsCount);
            }
            return $catCounts;
        }

        function getHome() {
            $this->view->renderHome($this->allTickets, $this->ticketsData, $this->countTickets);
        }

        function getTicketsByCategory($params = null) {
            $category_id = $params[':ID'];
            $ticketsByCategory = $this->ticketModel->getTickets($category_id);
            $this->view->renderTicketsByCategory($ticketsByCategory, $params);
        }

        function showAllTickets() {
            $this->view->renderAllTickets($this->allTickets, $this->countTickets);
        }

        function buyTicket($params = null) {
            $ticket_id = $params[':ID'];
            $this->ticketModel->deleteTicket($ticket_id);
            $this->view->showHomeLocation();
        }

        function getTicketDetails($params = null) {
            $ticket_id = $params[':ID'];
            $ticket = $this->ticketModel->getTicket($ticket_id);
            $this->view->renderTicketDetails($ticket);
        }

    }

    /*
 var_dump($data)

     array(4) { 
        [0]=> object(stdClass)#1225 (3) { 
            ["id_category"]=> string(1) "1" 
            ["name"]=> string(3) "vip" 
            ["price"]=> string(3) "750" 
        } 
        [1]=> object(stdClass)#1226 (3) { 
            ["id_category"]=> string(1) "2" 
            ["name"]=> string(7) "popular" 
            ["price"]=> string(3) "320" 
        } 
        [2]=> object(stdClass)#1227 (3) { 
            ["id_category"]=> string(1) "3" 
            ["name"]=> string(5) "promo" 
            ["price"]=> string(1) "0" 
        } 
        [3]=> object(stdClass)#1228 (3) { 
            ["id_category"]=> string(1) "4" 
            ["name"]=> string(4) "sale" 
            ["price"]=> string(3) "150" 
        } 
    }

var_dump($data[1])

    object(stdClass)#1226 (3) { 
        ["id_category"]=> string(1) "2" 
        ["name"]=> string(7) "popular" 
        ["price"]=> string(3) "320" 
    }*/