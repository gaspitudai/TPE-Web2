<?php

    require_once 'php/API/controller/API.ticket.controller.php';
    require_once 'php/API/controller/API.category.controller.php';
    require_once 'php/API/controller/API.user.controller.php';
    require_once 'php/API/controller/API.controller.php';
    require_once 'RouterClass.php';

    $r = new Router();

    $r->addRoute('tickets', 'GET', 'APITicketController', 'getAll');
    $r->addRoute('ticket/:ID', 'GET', 'APITicketController', 'getTicket');

    $r->addRoute('categories', 'GET', 'APICategoryController', 'getAll');
    $r->addRoute('category/:ID', 'GET', 'APICategoryController', 'getCategory');

    $r->addRoute('users', 'GET', 'APIUserController', 'getAll');
    $r->addRoute('user/:ID', 'GET', 'APIUserController', 'getUser');

    $r->addRoute('wav.music', 'GET', 'APIController', 'getAll');

    $r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);