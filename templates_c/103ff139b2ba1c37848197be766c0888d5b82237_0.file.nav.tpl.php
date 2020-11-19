<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 04:30:09
  from 'C:\xampp\htdocs\WEB 2\TPE - copia\templates\public\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9642c13fa396_34790671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '103ff139b2ba1c37848197be766c0888d5b82237' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE - copia\\templates\\public\\nav.tpl',
      1 => 1602257432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9642c13fa396_34790671 (Smarty_Internal_Template $_smarty_tpl) {
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
