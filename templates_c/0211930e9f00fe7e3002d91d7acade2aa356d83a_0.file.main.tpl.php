<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 02:51:31
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\user\welcome\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb72123624a23_31436753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0211930e9f00fe7e3002d91d7acade2aa356d83a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\user\\welcome\\main.tpl',
      1 => 1602295184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb72123624a23_31436753 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

    <section class="ticketBox" id="ticketsSection">
        
        <section class="ticketSection">

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketsData']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['data']->value[2]->name == 'promo') {?>

                        <article class="ticketCardArticle" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]->id_category;?>
">

                            <section class="imgCardSection card-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                <h4><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]->name, 'UTF-8');?>
</h4>
                            </section>
                            
                            <section class="priceCardSection">
                                <?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]->price == 0) {?>
                                    <h4>Free</h4>
                                <?php } else { ?>
                                    <h4>$<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]->price;?>
</h4>
                                <?php }?>
                            </section>
                            
                            <section class="stockCardSection">
                                <p>Available: <span> <?php echo $_smarty_tpl->tpl_vars['countTickets']->value[$_smarty_tpl->tpl_vars['i']->value];?>
 </span>  tickets</p>
                            </section>

                        </article>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }
}
?>
        
        </section>

    </section><?php }
}
