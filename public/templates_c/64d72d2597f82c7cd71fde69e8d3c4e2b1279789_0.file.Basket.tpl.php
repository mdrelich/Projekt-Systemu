<?php
/* Smarty version 3.1.30, created on 2021-01-26 05:32:33
  from "F:\xampp\htdocs\php_09_bd\app\views\Basket.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600f9b614e9730_23913882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d72d2597f82c7cd71fde69e8d3c4e2b1279789' => 
    array (
      0 => 'F:\\xampp\\htdocs\\php_09_bd\\app\\views\\Basket.tpl',
      1 => 1611635540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_600f9b614e9730_23913882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1679143008600f9b614da655_58279426', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_685815059600f9b614e9252_77283617', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1679143008600f9b614da655_58279426 extends Smarty_Internal_Block
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
class Block_685815059600f9b614e9252_77283617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Nazwa produktu:</th>
		<th>Dostępnych:</th>
		<th>Waga:</th>
                <th>Kolor:</th>
                <th>Aktualna cena:</th>
                <th>x</th>
                <th>W koszyku:</th>
                <th></th>
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
</td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
basketDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">usun</a></tr>
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
