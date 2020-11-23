<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 04:02:42
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\public\ticket\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb731d29c4352_58653842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a6cf4869c29eca154c0d32a07702a7ff611d705' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\public\\ticket\\main.tpl',
      1 => 1602262513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/ticket/ticketsByCategory.tpl' => 1,
  ),
),false)) {
function content_5fb731d29c4352_58653842 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

    <section class="ticketBox" id="ticketsSection">

    <?php $_smarty_tpl->_subTemplateRender('file:public/ticket/ticketsByCategory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
    </section><?php }
}
