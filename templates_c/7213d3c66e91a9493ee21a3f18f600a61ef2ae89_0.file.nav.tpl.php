<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 02:50:55
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\public\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb720ff77a808_74203887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7213d3c66e91a9493ee21a3f18f600a61ef2ae89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\public\\nav.tpl',
      1 => 1602257432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb720ff77a808_74203887 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="fixedNav">
    <div class="navBox">

        <div class="logoBox">                  
            <img id="js-logo-ShowHome" src="img/WAV-logo.svg" alt="WAV logo">
        </div>

        <section class="navButtonsSection">
            <div class="defaultButtonsNavBox">
                <ul>
                    <li>
                        <a href="#ticketsSection" id="js-showTickets">
                            TICKETS
                        </a>
                    </li>
                    <li>
                        <a href="login" id="js-showLogin">
                            LOG IN
                        </a>
                    </li>
                    <li>
                        <a href="signup" id="js-showSingUp">
                            SIGN UP
                        </a>
                    </li>
                </ul>
            </div>
            <div class="burguerMenuBox">
                <button id="js-btnMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </section>

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
