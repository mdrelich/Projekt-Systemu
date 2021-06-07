<?php
/* Smarty version 3.1.30, created on 2021-06-02 09:21:21
  from "C:\xampp\htdocs\php_09_bd\app\views\history.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b7317113ff65_08428465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fcfcbeafebb8e928c51fe9162ef03ac85eea858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\history.tpl',
      1 => 1612009016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60b7317113ff65_08428465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189415686660b731711311b9_49904024', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40251890060b7317113f9e3_04252685', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_189415686660b731711311b9_49904024 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_40251890060b7317113f9e3_04252685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    </br></br>
<center><h1>Historia twoich zakupów</h1></center>

<center><table id="tab_people" class="pure-table pure-table-bordered"></center>
<thead></br></br></br>
	<tr>
                <th>Data zakupu</th>
		<th>Nazwa produktu:</th>
		<th>Waga:</th>
                <th>Kolor:</th>
                <th></th>
                <th></th>
                <th>Zakupiono:</th>
                <th>Cena 1 szt:</th>
                <th style="background-color:#FF0000">Łącznie zapłacono:</th>
                
	</tr>
      
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_of_purchase"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["weight"];?>
<a> gram</a></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["color"];?>
</td><td></td><td></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["quantity_cart"];?>
<a>sztuk</a></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["paid_price"];?>
<a> zł</a></td><td style="background-color:#90EE90"><?php echo $_smarty_tpl->tpl_vars['p']->value["total_price_history"];?>
<a> zł</a></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<?php
}
}
/* {/block 'bottom'} */
}
