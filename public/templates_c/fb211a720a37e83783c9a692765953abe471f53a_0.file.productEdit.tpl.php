<?php
/* Smarty version 3.1.30, created on 2021-06-05 15:39:53
  from "C:\xampp\htdocs\php_09_bd\app\views\productEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bb7ea96836e1_62172092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb211a720a37e83783c9a692765953abe471f53a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\productEdit.tpl',
      1 => 1622900391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60bb7ea96836e1_62172092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149561860760bb7ea9683220_53511288', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_149561860760bb7ea9683220_53511288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productSave" method="post" class="pure-form pure-form-aligned">
    <fieldset></br></br>
		<legend>Dane produktu</legend>
		<div class="pure-control-group">
            <label for="name">Nazwa</label>
            <input id="name" type="text" placeholder="np. Białko serwatkowe" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>
		<div class="pure-control-group">
            <label for="description">opis produktu</label>
            <input id="description" type="text" placeholder="opis" name="description" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
">
        </div>
        
        <div class="pure-control-group">
            <label for="quantity">Ilosc</label>
            <input id="description" type="text" placeholder="ilosc" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->quantity;?>
">
        </div>
        
        		<div class="pure-control-group">
            <label for="weight">waga</label>
            <input id="weight" type="text" placeholder="domyślnie w gramach" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->weight;?>
">
        </div>
        		<div class="pure-control-group">
            <label for="color">smak</label>
            <input id="color" type="text" placeholder="np. czekolada" name="color" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->color;?>
">
                        </div>
        		<div class="pure-control-group">
            <label for="price">cena</label>
            <input id="price" type="text" placeholder="np. 10" name="price" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->price;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList">Powrót</a>
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
