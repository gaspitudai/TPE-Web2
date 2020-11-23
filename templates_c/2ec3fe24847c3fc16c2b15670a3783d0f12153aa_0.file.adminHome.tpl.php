<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 00:30:47
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\user\adminHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb700278ec445_46581578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ec3fe24847c3fc16c2b15670a3783d0f12153aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\user\\adminHome.tpl',
      1 => 1602298631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/head.tpl' => 1,
    'file:user/nav.tpl' => 1,
    'file:user/adminTools.tpl' => 1,
  ),
),false)) {
function content_5fb700278ec445_46581578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:user/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:user/adminTools.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
