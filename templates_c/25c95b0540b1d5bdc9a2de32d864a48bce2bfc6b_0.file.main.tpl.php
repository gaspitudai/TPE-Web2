<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 02:50:55
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\public\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb720ff888ca1_09573576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c95b0540b1d5bdc9a2de32d864a48bce2bfc6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\public\\main.tpl',
      1 => 1602257587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/cards.tpl' => 1,
  ),
),false)) {
function content_5fb720ff888ca1_09573576 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

    <section class="ticketBox" id="ticketsSection">
        
    <?php $_smarty_tpl->_subTemplateRender('file:public/cards.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </section>
    <?php }
}
