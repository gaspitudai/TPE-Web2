<?php

    require_once 'RouterClass.php';
    require_once 'php/controller/ticket.controller.php';
    require_once 'php/controller/user.controller.php';

    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');
    define('ADMIN','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/admin');

    $r = new Router();

/* Public =================================================================================== */

    $r->addRoute('home', 'GET', 'TicketController', 'getHome');

    $r->addRoute('tickets-category/:ID', 'GET', 'TicketController', 'getTicketsByCategory');
    $r->addRoute('tickets-all', 'GET', 'TicketController', 'showAllTickets');
    $r->addRoute('ticket-detail/:ID', 'GET', 'TicketController', 'getTicketDetails');

//    $r->addRoute('buy-confirmed/:ID', 'GET', 'TicketController', 'buyTicket');

/* User ===================================================================================== */

    $r->addRoute('signup', 'GET', 'UserController', 'getSignup');
    $r->addRoute('login', 'GET', 'UserController', 'getLogin');
    $r->addRoute('logout', 'GET', 'UserController', 'logOut');
    $r->addRoute('verify', 'POST', 'UserController', 'addUser');

    $r->addRoute('welcome', 'POST', 'UserController', 'verifyUser');

    $r->addRoute('user', 'GET', 'UserController', 'getHome');

    $r->addRoute('user/tickets-category/:ID', 'GET', 'UserController', 'getTicketsByCategory');
    $r->addRoute('user/tickets-all', 'GET', 'UserController', 'showAllTickets');
    $r->addRoute('user/ticket-detail/:ID', 'GET', 'UserController', 'getTicketDetails');

    $r->addRoute('admin', 'GET', 'UserController', 'getAdminHome');

/* Admin ===================================================================================== */

    $r->addRoute('deleteTicket/:ID', 'GET', 'UserController', 'deleteTicket');
    $r->addRoute('deleteCategory/:ID', 'GET', 'UserController', 'deleteCategory');

    $r->addRoute('addTicket', 'POST', 'UserController', 'addTicket');
    $r->addRoute('addCategory', 'POST', 'UserController', 'addCategory');
    
    $r->addRoute('updateTicket', 'POST', 'UserController', 'updateTicket');
    $r->addRoute('updateCategory', 'POST', 'UserController', 'updateCategory');

/* Default ================================================================================== */

    $r->setDefaultRoute('TicketController', 'getHome');
    
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);