<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 03:57:07
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\user\ticket\main-all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb73083261373_64906411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c5f231955b75ad628784fefa0642a9a6106bcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\user\\ticket\\main-all.tpl',
      1 => 1602297034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb73083261373_64906411 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

    <section class="ticketBox" id="ticketsSection">
        
        <section class="ticketsTableSection">

            <div class="backBox">
                <button id="js-btnBack">
                    <i class="fas fa-arrow-left"></i>
                </button>
            </div>
            <div class="tableBoxHead">
                <table>
                    <thead>
                        <tr class="trHead">
                            <th>ID</th>
                            <th>Dj name</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tableBox">
                <table>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTickets']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>    
                        
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->name;?>
</td>
                            <td>$<?php echo $_smarty_tpl->tpl_vars['ticket']->value->cat_price;?>
 ARS</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->date;?>
</td>
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ticket']->value->cat_name, 'UTF-8');?>
</td>
                            <td class="tdButton">
                                <button class="js-btn-showTicketDetails" data-id="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
">
                                   <i class="fas fa-plus"></i>
                                </button>
                            </td>
                        </tr>  
                        
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>
            </div>
            <div class="showAllTicketBox">
                <a id="js-btnShowAllTickets">
                    Available: <?php echo count($_smarty_tpl->tpl_vars['allTickets']->value);?>
 tickets
                </a>
            </div>

        </section>

    </section>
        
    <!--div class="confirm-buy-box js-show-contain">
        <h2>
            Confirm your purchase
        </h2>
        <button type="submit" class="btn-confirmBuy">
            Buy
        </button>
        <button class="btn-cancelBuy">
            Cancel
        </button>
    </div--><?php }
}
