<?php
/* Smarty version 3.1.30, created on 2021-01-22 04:00:07
  from "F:\xampp\htdocs\php_09_bd\app\views\PersonEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600a3fb7c19e57_85989680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3879b927eab017c8d00e90c045915ac408518e0' => 
    array (
      0 => 'F:\\xampp\\htdocs\\php_09_bd\\app\\views\\PersonEdit.tpl',
      1 => 1611284399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_600a3fb7c19e57_85989680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_791747501600a3fb7c198a4_29070506', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_791747501600a3fb7c198a4_29070506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">imię</label>
            <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>
		<div class="pure-control-group">
            <label for="description">nazwisko</label>
            <input id="description" type="text" placeholder="nazwisko" name="description" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">data ur.</label>
            <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->birthdate;?>
">
        </div>
        		<div class="pure-control-group">
            <label for="weight">waga</label>
            <input id="birthdate" type="text" placeholder="ww" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->weight;?>
">
        </div>
        		<div class="pure-control-group">
            <label for="color">kolor</label>
            <input id="birthdate" type="text" placeholder="cc" name="color" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->color;?>
">
                        </div>
        		<div class="pure-control-group">
            <label for="price">cena</label>
            <input id="birthdate" type="text" placeholder="pp." name="price" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->price;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
