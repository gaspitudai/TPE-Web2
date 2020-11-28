<?php

//    require_once 'php/API/controller/API.all.controller.php';
    require_once 'php/API/controller/API.ticket.controller.php';
    require_once 'php/API/controller/API.category.controller.php';
    require_once 'php/API/controller/API.user.controller.php';
    require_once 'php/API/controller/API.comment.controller.php';
    require_once 'RouterClass.php';

    $r = new Router();

    $r->addRoute('comments', 'GET', 'APICommentController', 'getAll');
    $r->addRoute('post-comment', 'POST', 'APICommentController', 'postComment');

    /*

    $r->addRoute('tickets', 'GET', 'APITicketController', 'getAll');
    $r->addRoute('ticket/:ID', 'GET', 'APITicketController', 'getTicket');
    $r->addRoute('ticket/:ID', 'DELETE', 'APITicketController', 'deleteTicket');
    $r->addRoute('ticket/:ID', 'PUT', 'APITicketController', 'updateTicket');
    $r->addRoute('ticket', 'POST', 'APITicketController', 'addTicket');

    $r->addRoute('categories', 'GET', 'APICategoryController', 'getAll');
    $r->addRoute('category/:ID', 'GET', 'APICategoryController', 'getCategory');
    $r->addRoute('category/:ID', 'DELETE', 'APICategoryController', 'deleteCategory');
    $r->addRoute('category/:ID', 'PUT', 'APICategoryController', 'updateCategory');
    $r->addRoute('category', 'POST', 'APICategoryController', 'addCategory');

    $r->addRoute('users', 'GET', 'APIUserController', 'getAll');
    $r->addRoute('user/:ID', 'GET', 'APIUserController', 'getUser');
    $r->addRoute('user/:ID', 'DELETE', 'APIUserController', 'deleteUser');
    $r->addRoute('user/:ID', 'PUT', 'APIUserController', 'updateUser');
    $r->addRoute('user', 'POST', 'APIUserController', 'addUser');
    
    $r->addRoute('wav.music', 'GET', 'APIAllController', 'getAll');

    */

    $r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);

