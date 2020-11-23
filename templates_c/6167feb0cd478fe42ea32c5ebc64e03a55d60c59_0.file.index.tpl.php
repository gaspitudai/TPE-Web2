<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 04:17:13
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\user\ticket\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb73539b7a031_38380898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6167feb0cd478fe42ea32c5ebc64e03a55d60c59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\user\\ticket\\index.tpl',
      1 => 1602296370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/welcome/head.tpl' => 1,
    'file:../../public/register.tpl' => 1,
    'file:user/welcome/nav.tpl' => 1,
    'file:../../public/header.tpl' => 1,
    'file:user/ticket/main.tpl' => 1,
    'file:../../public/footer.tpl' => 1,
  ),
),false)) {
function content_5fb73539b7a031_38380898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/welcome/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../../public/register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:user/welcome/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../../public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:user/ticket/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../../public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
