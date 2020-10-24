<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 04:41:06
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\public\ticket\index-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f939442d66227_12191933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44064861ee5831c4055a8b7cce4cfaf5d10ee388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\public\\ticket\\index-details.tpl',
      1 => 1602262775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/head.tpl' => 1,
    'file:public/ticket/details.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_5f939442d66227_12191933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:public/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="backToHome-arrow-box">
    <a href="home" class="color-primary"><i class="fas fa-arrow-left"></i></a>
</div>

<main>

    <section class="ticketBox" id="ticketsSection">    
    
        <?php $_smarty_tpl->_subTemplateRender('file:public/ticket/details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    </section>
    
<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
