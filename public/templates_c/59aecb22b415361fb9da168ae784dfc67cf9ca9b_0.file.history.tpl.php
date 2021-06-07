<?php
/* Smarty version 3.1.30, created on 2021-01-30 13:16:57
  from "F:\xampp\htdocs\php_09_bd\app\views\history.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60154e39988c40_22728746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59aecb22b415361fb9da168ae784dfc67cf9ca9b' => 
    array (
      0 => 'F:\\xampp\\htdocs\\php_09_bd\\app\\views\\history.tpl',
      1 => 1612009016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60154e39988c40_22728746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120907912260154e39976f71_83269404', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112545393560154e39988682_87620822', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_120907912260154e39976f71_83269404 extends Smarty_Internal_Block
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
class Block_112545393560154e39988682_87620822 extends Smarty_Internal_Block
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
