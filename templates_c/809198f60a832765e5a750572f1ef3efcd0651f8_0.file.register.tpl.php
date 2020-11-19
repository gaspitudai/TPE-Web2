<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 04:30:09
  from 'C:\xampp\htdocs\WEB 2\TPE - copia\templates\public\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9642c1387e09_90631022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '809198f60a832765e5a750572f1ef3efcd0651f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE - copia\\templates\\public\\register.tpl',
      1 => 1602257427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9642c1387e09_90631022 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- LOG IN -->

<div class="formLogInBox js-show-contain">
    <button class="btnClose" id="js-btnClose-login"></button>

    <form action="welcome" class="formLogin" method="post"> 

        <input class="inp-log" type="text" name="userName" placeholder="User" required>
        <input class="inp-log" type="password" name="userPassword" placeholder="Password" required>
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
