<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 04:02:52
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\public\ticket\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb731dc6d7196_85609088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '619838356aa22d2af0f89e1ff8c3cddeaa8a7a79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\public\\ticket\\details.tpl',
      1 => 1602262787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb731dc6d7196_85609088 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="confirm-buy-box">
    <div class="ticketInfoBox">
        <section class="left-ticketInfo-section">
            <div class="rotateInfoBox">
                <p class="left-infoTicket-category"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ticket']->value->cat_name, 'UTF-8');?>
<span class="id-ticket-detail"> #<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
</span></p>
                <p class="left-infoTicket-name"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ticket']->value->name, 'UTF-8');?>
</p>
                <p class="left-infoTicket-price">$<?php echo $_smarty_tpl->tpl_vars['ticket']->value->cat_price;?>
.00</p>
                <p class="left-infoTicket-date"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->date;?>
</p>
            </div>
        </section>
        <?php if ($_smarty_tpl->tpl_vars['ticket']->value->cat_name == 'vip') {?>
            <section class="right-ticketInfo-section bg-vip">
        <?php } elseif ($_smarty_tpl->tpl_vars['ticket']->value->cat_name == 'popular') {?>
            <section class="right-ticketInfo-section bg-popular">
        <?php } else { ?>
            <section class="right-ticketInfo-section bg-promo">
        <?php }?>
            <div class="vipWav">
                <div class="blackContentCategory">
                    <p><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ticket']->value->cat_name, 'UTF-8');?>
<span class="id-ticket-detail"> #<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
</span></p>
                </div>
                <div class="wavLogoBox">
                    <img src="img/WAV-logo.svg">
                </div>
            </div>
            <div class="nameTicketInfo">
                <p><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ticket']->value->name, 'UTF-8');?>
</p>
            </div>
            <div class="priceDateQr">
                <div class="priceDateBox">
                    <div class="priceBox">
                        <p>$<?php echo $_smarty_tpl->tpl_vars['ticket']->value->cat_price;?>
.00</p>
                    </div>
                    <div class="dateTicketInfoBox">
                        <p><?php echo $_smarty_tpl->tpl_vars['ticket']->value->date;?>
</p>
                    </div>
                </div>
                <div class="qrBox">
                    <img src="https://play-lh.googleusercontent.com/ufwUy4SGVTqCs8fcp6Ajxfpae0bNImN1Rq2cXUjWI7jlmNMCsXgQE5C3yUEzBu5Gadkz">
                </div>
            </div>
        </section>
    </div>
</div><?php }
}
