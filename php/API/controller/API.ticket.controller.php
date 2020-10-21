<?php

    require_once 'php/model/ticket.model.php';
    require_once 'php/API/view/API.view.php';

    class APITicketController {

        private $ticketModel;
        private $view;

        function __construct() {
            $this->ticketModel = new TicketModel();
            $this->view = new APIView();
        }

        function getAll() {
            $tickets = $this->ticketModel->getTickets();
            $this->view->response($tickets, 200);
        }

        function getTicket($params = null) {
            $id = $params[':ID'];
            $ticket = $this->ticketModel->getTicket($id);
            if ($ticket)
                $this->view->response($ticket, 200);
            else
                $this->view->response("Ticket $id do not exist", 404);   
        }
        

    }