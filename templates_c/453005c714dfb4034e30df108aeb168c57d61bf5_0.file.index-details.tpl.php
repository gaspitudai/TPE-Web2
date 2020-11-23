<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 04:17:23
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\user\ticket\index-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb73543870790_68198927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453005c714dfb4034e30df108aeb168c57d61bf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\user\\ticket\\index-details.tpl',
      1 => 1605841965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/welcome/head.tpl' => 1,
    'file:../../public/footer.tpl' => 1,
  ),
),false)) {
function content_5fb73543870790_68198927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/welcome/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="backToHome-arrow-box">
    <a href="user" class="color-primary"><i class="fas fa-arrow-left"></i></a>
</div>

<main>

    <section class="ticketBox" id="ticketsSection">    
    
        <div class="confirm-buy-box">
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
        </div>
    
    </section>

    <section class="comments-section">
        
    </section>

<?php $_smarty_tpl->_subTemplateRender('file:../../public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
