<?php

    require_once 'php/model/user.model.php';
    require_once 'php/view/user.view.php';
    require_once 'php/controller/ticket.controller.php';
    require_once 'php/model/ticket.model.php';
    require_once 'php/model/category.model.php';

    class UserController {

        private $userModel;
        private $ticketModel;
        private $categoryModel;

        private $userView;
        private $userName;
        private $allUsers;

        private $ticketCtrl;
        private $allTickets;
        private $ticketsData;
        private $countTickets;


        function __construct() {
            $this->userModel = new UserModel();
            $this->userView = new UserView();
            $this->ticketModel = new TicketModel();
            $this->categoryModel = new CategoryModel();
            $this->ticketCtrl = new TicketController();

            $this->allUsers = $this->userModel->getAllUsers();

            $this->allTickets = $this->ticketCtrl->getAllTickets();
            $this->ticketsData = $this->ticketCtrl->getTicketsData();
            $this->countTickets = $this->ticketCtrl->getCountTickets();
        }

/*  PUBLIC  */

        function getLogin($msgName = null, $msgPass = null) {
            $this->userView->renderLogin($this->allTickets, $this->ticketsData, $this->countTickets, $msgName, $msgPass);
        }

        function getSignup($message = null) {
            $this->userView->renderSignup($this->allTickets, $this->ticketsData, $this->countTickets, $message);
        }

/*  USER  */

        function addUser() {
            $name = $_POST['userName'];
            $email = $_POST['userEmail'];
            $password = $_POST['userPassword'];
            if( isset($name) && !empty($name) &&
                isset($email) && !empty($email) &&
                isset($password) && !empty($password))
            {
                $name = strtoupper($name);
                $encriptedPass = password_hash($password, PASSWORD_DEFAULT);

                if($this->getExistingUser($name, $email) == false) {
                    $this->getSignup('User already exist');
                } else {
                    $this->userModel->addUser($name, $email, $encriptedPass);
                    $this->userName = $name;
                    $this->getVerifyUser($this->userName);
                }

            } else
                $this->getSignup('Input is empty!');
        }

        function getExistingUser($name, $email) {
            $exist = 0;
            foreach($this->allUsers as $user_db) {
                if($name == $user_db->name) {
                    $exist++;
                } elseif($email == $user_db->email) {
                    $exist++;
                }
            }
            if($exist == 0)
                return true;
            else
                return false;
        }

        function getVerifyUser($userName) {
            $this->userView->renderVerify($userName, $this->ticketsData, $this->countTickets);
        }

        function verifyUser(){
            $name = $_POST['userName'];
            $password = $_POST['userPassword'];
            if( isset($name) && !empty($name) &&
                isset($password) && !empty($password))
            {
                $user_db = $this->userModel->getUser($name);
                if(isset($user_db) && $user_db){
                    if(password_verify($password, $user_db->password)){
                        $this->userName = $name;
                        session_start();
                        $_SESSION['NAME'] = $user_db->name;
        //              $_SESSION['LAST_ACTIVITY'] = time();
                        $this->getWelcomeUser($user_db->name);
                    } else
                        $this->getLogin('', 'Invalid password');
                } else 
                    $this->getLogin('User do not exist', '');
            } else
                $this->getLogin('Input is empty!', '');
        }

        function getWelcomeUser($userName) {
            $this->userView->renderWelcomeHome($this->allTickets, $this->ticketsData, $this->countTickets, $userName);
        }

        function getHome() {
            session_start();
            if($this->checkLoggedIn()) {
                $this->getSignup('Join Up! :)');
            } else
                $this->userView->renderWelcomeHome($this->allTickets, $this->ticketsData, $this->countTickets, $_SESSION['NAME']);
        }

/*  TICKETS  */

        function getTicketsByCategory($params = null) {
            $category_id = $params[':ID'];
            $ticketsByCategory = $this->ticketModel->getTickets($category_id);
            session_start();
            if($this->checkLoggedIn()) {
                $this->getSignup('Join Up! :)');
            } else
                $this->userView->renderTicketsByCategory($ticketsByCategory, $params, $_SESSION['NAME']);
        }

        function showAllTickets() {
            session_start();
            if($this->checkLoggedIn()) {
                $this->getSignup('Join Up! :)');
            } else
                $this->userView->renderAllTickets($this->allTickets, $this->countTickets, $_SESSION['NAME']);
        }

        function getTicketDetails($params = null) {
            $ticket_id = $params[':ID'];
            $ticket = $this->ticketModel->getTicket($ticket_id);
            $this->userView->renderTicketDetails($ticket);
        }

        function checkLoggedIn() {
            return !isset($_SESSION['NAME']);
        }

        function logOut(){
            session_start();
            session_destroy();
            header('Location: '.BASE_URL);
        }

/* ADMIN ==============================================================================*/
        
    function getAdminHome() {
        session_start();
        if($this->checkLoggedIn())
            $this->getSignup('Join Up! :)');
        else {
            $user_db = $this->userModel->getUser($_SESSION['NAME']);
            if($user_db->clearence == 'admin') {
                $this->userView->renderAdminHome($this->allTickets, $this->ticketsData, $this->countTickets, $_SESSION['NAME']);
            } else {
                $this->getLogin('You have not permission. Enter valid admin:');
            }
        }
    }

// Add

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
                    $this->ticketModel->addTicket($name, $date, $category);
                }
                header('Location: '.ADMIN);
            }
        }
        
        function addCategory() {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];
            if( isset($name) && !empty($name) &&
                isset($price) && !empty($price) &&
                isset($id_category) && !empty($id_category))
            {
                $this->categoryModel->addCategory($name, $price, $id_category);
                header('Location: '.ADMIN);
            }
        }

// Delete

        function deleteTicket($params = null) {
            $id_ticket = $params[':ID'];
            $this->ticketModel->deleteTicket($id_ticket);
            header('Location: '.ADMIN);
        }

        function deleteCategory($params = null) {
            $id_ticket = $params[':ID'];
            $this->categoryModel->deleteCategory($id_ticket);
            header('Location: '.ADMIN);
        }

// Update

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
                $this->ticketModel->updateTicket($name, $date, $id_category, $id_ticket);
                header('Location: '.ADMIN);
            }
        }

        function updateCategory() {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];
            if( isset($name) && !empty($name) &&
                isset($price) && !empty($price) &&
                isset($id_category) && !empty($id_category))
            {
                $this->categoryModel->updateCategory($name, $price, $id_category);
                header('Location: '.ADMIN);
            }
        }
        
    }