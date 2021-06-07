<?php
/* Smarty version 3.1.30, created on 2021-06-05 15:34:12
  from "C:\xampp\htdocs\php_09_bd\app\views\productList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bb7d54f02b69_24556116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929a2e4455c392d3225da21f5e14051e1c4d9e1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\productList.tpl',
      1 => 1622900051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60bb7d54f02b69_24556116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11858714260bb7d54ef3079_84894918', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153139197360bb7d54f02574_46942708', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_11858714260bb7d54ef3079_84894918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br> <br> <br> <br> <br>
    <center><div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productList">
	<legend><center><h2>Wyszukiwarka produktów</h2></center></legend>
	<fieldset>
		<input type="text" placeholder="Podaj nazwe produktu" name="sf_name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->name;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Szukaj</button>
	</fieldset>
</form>
        </div>	
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_153139197360bb7d54f02574_46942708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
    <?php if (\core\RoleUtils::inRole("admin")) {?> 
        <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productNew">+ Dodaj produkt</a> <?php }
if (\core\RoleUtils::inRole("pracownik")) {?> 
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productNew">+ Dodaj produkt</a> <?php }?>
</div>	</center>

<center><table id="tab_people" class="pure-table pure-table-bordered"></center>
    <thead>
	<tr>
		<th>Nazwa przedmiotu</th>
		<th>Opis przedmiotu</th>
		<th>Dostepna ilość</th>
                <th>Waga</th>
                <th>Smak</th>
                <th>Cena</th>
                <th></th>
               
        </tr>
    <br><br>

</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produkty']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["description"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["quantity"];?>
<a> sztuk</a></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["weight"];?>
<a> gram</a></td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["color"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
<a> zł</a></td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addTocart/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">KUP</a><?php if (\core\RoleUtils::inRole("admin")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">Edytuj</a><?php }
if (\core\RoleUtils::inRole("pracownik")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">Edytuj</a><?php }?>&nbsp;<?php if (\core\RoleUtils::inRole("admin")) {?><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">Usuń</a><?php }
if (\core\RoleUtils::inRole("pracownik")) {?><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idproduct'];?>
">Usuń</a><?php }?></td></tr>
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
