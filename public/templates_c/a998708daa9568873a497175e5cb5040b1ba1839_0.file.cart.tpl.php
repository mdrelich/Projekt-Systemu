<?php
/* Smarty version 3.1.30, created on 2021-06-02 09:20:06
  from "C:\xampp\htdocs\php_09_bd\app\views\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b73126e455a9_21758507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a998708daa9568873a497175e5cb5040b1ba1839' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\cart.tpl',
      1 => 1611792622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60b73126e455a9_21758507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57476639860b73126e31934_93555635', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36410361160b73126e44b70_58854579', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_57476639860b73126e31934_93555635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
</div>	
    </br></br>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_36410361160b73126e44b70_58854579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <center><h1>Skład twojego koszyka</h1></center>
<center><table id="tab_people" class="pure-table pure-table-bordered"></center>
<thead></br></br></br></br>
	<tr>
		<th>Nazwa produktu:</th>
		<th>Dostępnych:</th>
		<th>Waga:</th>
                <th>Kolor:</th>
                <th>Aktualna cena:</th>
                <th></th>
                <th>W koszyku:</th>
                <th></th>
                
	</tr>
      
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["quantity"];?>
<a> sztuk</a></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["weight"];?>
<a> gram</a></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["color"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
<a> zł</a></td><td></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["quantity_cart"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToHistory/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">Potwierdź zakup</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">Usuń z koszyka</a></td></tr>
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
