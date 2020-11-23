<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 00:30:48
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\user\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb70028826bf6_79351651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a179961eef43548f0f6f18d932b16738342357' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\user\\nav.tpl',
      1 => 1602266313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb70028826bf6_79351651 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="fixedNav">
    <div class="navBox">

        <div class="logoBox">                  
            <img id="js-logo-ShowHome" src="img/WAV-logo.svg" alt="WAV logo">
        </div>

    </div>
</nav>

<nav class="hiddenNav js-show-contain">

    <button class="invisibleBtnToHideNav" id="js-btnHiddenMenu">

    </button>
    <section class="buttonsHiddenNavSection">
        <button id="js-btnshowTickets"> TICKETS </button>
        <button> GALERY </button>
        <button> EVENTS </button>
        <button id="js-btnshowLogin"> LOG IN </button>
        <button id="js-btnshowSignUp"> SIGN UP </button>
    </section>

</nav><?php }
}
