<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 06:13:51
  from 'C:\xampp\htdocs\WEB 2\TPE - copia\templates\public\register-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f965b0f65a900_44978050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06d1d687eef146fce7995d54fa3d8ecc177dc58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE - copia\\templates\\public\\register-login.tpl',
      1 => 1602270269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f965b0f65a900_44978050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- LOG IN -->

<div class="formLogInBox">
    <button class="btnClose" id="js-btnClose-login"></button>

    <form action="welcome" class="formLogin" method="post"> 
        <label class="color-primary" for="userName"><?php echo $_smarty_tpl->tpl_vars['msgName']->value;?>
</label>
        <input name="userName" class="inp-log" type="text" placeholder="User" required>
        <label class="color-primary" for="userPassword"><?php echo $_smarty_tpl->tpl_vars['msgPass']->value;?>
</label>
        <input name="userPassword" class="inp-log" type="password" placeholder="Password" required>
        <button type="submit">Log In</button>
        
    </form>
</div>

<!-- SIGN UP -->

<div class="formSignUpBox js-show-contain">
    <button class="btnClose" id="js-btnClose-signup"></button>

    <form action="verify" class="formSignUp" method="post"> 

        <input class="inp-log" type="text" name="userName" placeholder="User" required>
        <input class="inp-log" type="email" name="userEmail" placeholder="Email" required>
        <input class="inp-log" type="password" name="userPassword" placeholder="Password" required>
        <button type="submit">Sign Up</button>

    </form>
</div><?php }
}
