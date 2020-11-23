<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 02:45:51
  from 'C:\xampp\htdocs\WEB 2\TPE\templates\user\adminTools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb71fcf8b7bc4_72081164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f00ca3246d936f2f0202269968d2967d44ef58eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB 2\\TPE\\templates\\user\\adminTools.tpl',
      1 => 1605836711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb71fcf8b7bc4_72081164 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="admin-main-main">

    <h1>Welcome admin <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</h1>

    <div class="showAllTicketBox admin-showAllTicketBox">
        <a id="js-btnShowAllTickets"><?php echo count($_smarty_tpl->tpl_vars['allTickets']->value);?>
 tickets</a>
        <a id="js-btnShowAllTickets"><?php echo count($_smarty_tpl->tpl_vars['ticketsData']->value[1]);?>
 categories</a>
    </div>

    <section class="ticketBox admin-main" id="ticketsSection">
        
        <section class="ticketsTableSection">

<!-- TICKETS -->

            <h2>TICKETS</h2>

            <div class="tableBoxHead">
                <table>
                    <thead>
                        <tr class="trHead">
                            <th>ID</th>
                            <th>Dj name</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tableBox">

            <table class="tableAdmin1">
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
                            <td class="tdButton"><button class="js-btn-deleteTicket" data-id="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
"><i class="fas fa-times"></i></button></td>
                        </tr>      

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>        

            </div>

            <section class="adminSection">

                <label for="">ADD</label>
                <form action="addTicket" class="admin-form" method="POST">
                    <div>
                        <label for="count">Nº</label>
                        <select name="count">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - (1) : 1-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                            <?php }
}
?>
                        </select>
                        <label for="name">Name</label>
                        <select name="name" id="">
                            <option value="Paul Deep">Paul Deep</option>
                            <option value="Dig Weed">Dig Weed</option>
                            <option value="Latmun">Latmun</option>
                        </select>
                        <label for="date">Date</label>
                        <select name="date" id="">
                            <option value="2020-11-15">2020-11-15</option>
                            <option value="2020-11-05">2020-11-05</option>
                            <option value="2020-11-04">2020-11-04</option>
                            <option value="2020-10-15">2020-10-15</option>
                        </select>
                        <label for="category">Category</label>
                        <select name="category" id="">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketsData']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value[1]->id_category == 2) {?> 
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->id_category;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->name, 'UTF-8');?>
</option>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }
}
?>
                        </select>                
                    </div>
                    <button type="submit"><i class="fas fa-plus"></i></button>
                </form>

                <label for="">UPDATE</label>
                <form action="updateTicket" class="admin-form" method="POST">
                    <div>
                        <label for="id_ticket">ID</label>
                        <select name="id_ticket">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTickets']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
                               <option value="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <label for="name">Name</label>
                        <select name="name">
                            <option value="Paul Deep">Paul Deep</option>
                            <option value="Dig Weed">Dig Weed</option>
                            <option value="Nicholas Van Orton">Nicholas Van Orton</option>
                        </select>
                        <label for="date">Date</label>
                        <select name="date">
                            <option value="2020-11-15">2020-11-15</option>
                            <option value="2020-11-05">2020-11-05</option>
                            <option value="2020-11-04">2020-11-04</option>
                            <option value="2020-10-15">2020-10-15</option>
                        </select>
                        <label for="category">Category</label>
                        <select name="category">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketsData']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value[1]->id_category == 2) {?> 
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->name, 'UTF-8');?>
</option>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }
}
?>
                        </select>
                    </div>
                    <button type="submit"><i class="fas fa-check"></i></button>
                </form>

            </section>

<!-- CATEGORIES -->

            <h2>CATEGORIES</h2>

            <div class="tableBoxHead">
                <table>
                    <thead>
                        <tr class="trHead">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tableBox">
                <table>
                    <tbody>

                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketsData']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value[1]->id_category == 2) {?>
                        
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->id_category;?>
</td>
                                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->name, 'UTF-8');?>
</td>
                                    <td>$<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->price;?>
 ARS</td>
                                    <td class="tdButton">
                                        <button class="js-btn-deleteCategory" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->id_category;?>
">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                        
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }
}
?>

                    </tbody>
                </table>
            </div>

            <section class="adminSection">
                <label for="">ADD</label>
                <form action="addCategory" class="admin-form" method="POST">
                    <div>
                        <label for="">Name</label>
                        
                        <select name="name">
                            <option value="vip">VIP</option>
                            <option value="popular">Popular</option>
                            <option value="promo">Promo</option>
                            <option value="sale">Sale</option>
                        </select>
                        <label for="">Price</label>
                        <select name="price">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (0) : 0-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value*50;?>
">$<?php echo $_smarty_tpl->tpl_vars['i']->value*50;?>
 ARS</option>
                            <?php }
}
?>
                        </select>
                        
                        <input name="id_category" type="number" value="<?php echo count($_smarty_tpl->tpl_vars['ticketsData']->value[1])+1;?>
" class="js-show-contain">  

                    </div>
                    <button type="submit"><i class="fas fa-plus"></i></button>
                </form>

                <label for="">UPDATE</label>
                <form action="updateCategory" class="admin-form" method="POST">
                    <div>

                        <label for="id_category">ID</label>
                        <select name="id_category">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketsData']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value[1]->id_category == 2) {?> 
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->id_category;?>
</option>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }
}
?>
                        </select>

                        <label for="name">Name</label>
                        <select name="name">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ticketsData']->value[1])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketsData']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value[1]->id_category == 2) {?> 
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['i']->value]->name, 'UTF-8');?>
</option>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }
}
?>
                        </select>

                        <label for="price">Price</label>
                        <select name="price">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (0) : 0-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value*50;?>
">$<?php echo $_smarty_tpl->tpl_vars['i']->value*50;?>
 ARS</option>
                            <?php }
}
?>
                        </select> 

                    </div>
                    <button type="submit" id="js-btn-updateCategory"><i class="fas fa-check"></i></button>
                </form>

            </section>

<!-- USERS -->

            <h2>USERS</h2>

            <div class="tableBoxHead">
                <table>
                    <thead>
                        <tr class="trHead">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Clearence</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
</td>
                                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['user']->value->name, 'UTF-8');?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->clearence;?>
</td>
                                <td class="tdButton">
                                    <button class="js-btn-deleteUser" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>

            <section class="adminSection">
                <label for="">UPDATE</label>
                <form action="updateUser" class="admin-form" method="POST">
                    <div>

                        <label for="user_id">Name</label>
                        <select name="user_id">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>

                        <label for="clearence">Clearence</label>
                        <select name="clearence">
                            <option value="admin">admin</option>
                            <option value="null">null</option>
                        </select>

                    </div>
                    <button type="submit" id="js-btn-updateUser"><i class="fas fa-check"></i></button>
                </form>

            </section>

        </section>

    </section>

</main><?php }
}
