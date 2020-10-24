<?php

    require_once 'php/model/ticket.model.php';
    require_once 'php/API/view/API.view.php';
    require_once 'php/API/controller/API.controller.php';

    class APITicketController extends APIController {

        private $ticketModel;
        private $view;

        function __construct() {
            parent::__construct();
            $this->ticketModel = new TicketModel();
            $this->view = new APIView();
        }

        public function getAll() {
            $tickets = $this->ticketModel->getTickets();
            $this->view->response($tickets, 200);
        }

        public function getTicket($params = null) {
            $id = $params[':ID'];
            $ticket = $this->ticketModel->getTicket($id);
            if ($ticket)
                $this->view->response($ticket, 200);
            else
                $this->view->response("Ticket $id do not exist :(", 404);   
        }

        public function deleteTicket($params = null) {
            $id = $params[':ID'];
            $result =  $ticket = $this->ticketModel->deleteTicketFromAPI($id);
            if($result > 0)
                $this->view->response("Ticket $id has deleted", 200);
            else
                $this->view->response("Ticket $id do not exist :(", 404);
        }

        public function updateTicket($params = null) {
            $id = $params[':ID'];
            $body = $this->getData();
            $ticket = $this->ticketModel->getTicket($id);
            if (empty($ticket)) {
                $this->view->response("Ticket $id do not exist :(", 404);
            }else {
                $result = $this->ticketModel->updateTicketFromAPI($body->name,$body->date,$body->id_category,$id);
                if($result > 0)
                    $this->view->response( $this->ticketModel->getTicket($id), 200);
                else
                    $this->view->response("Ticket $id has not update :(", 204);
            }
        }

        public function addTicket() {
            $body = $this->getData();
            $id = $this->ticketModel->addTicketFromAPI($body->name,$body->date,$body->id_category);
            if ($id)    // verifica si la tarea existe
                $this->view->response( $this->ticketModel->getTicket($id), 200);
            else
                $this->view->response("Ticket has not insert", 404);
        }
        

    }