<?php
/* Smarty version 3.1.30, created on 2021-06-05 15:44:58
  from "C:\xampp\htdocs\php_09_bd\app\views\registerEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bb7fda9049b1_55961815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d7fa6ef03b7f4b95538ebd85a547eb1f9d37d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\registerEdit.tpl',
      1 => 1612008804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60bb7fda9049b1_55961815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36805173360bb7fda904534_93034846', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_36805173360bb7fda904534_93034846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerSave" method="post" class="pure-form pure-form-aligned">
</br></br></br></br>	
    

<fieldset>
		<legend><h2>Rejestracja</h2></legend>
		<div class="pure-control-group">
            <label for="name">Login</label>
            <input id="login" type="text" placeholder="np. Marcin93" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
        </div>
		<div class="pure-control-group">
            <label for="description">Hasło</label>
            <input id="password" type="text" placeholder="" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
">
        </div>
        		<div class="pure-control-group">
            <label for="description">Imie</label>
            <input id="first_name" type="text" placeholder="" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->first_name;?>
">
        </div>
        		<div class="pure-control-group">
            <label for="description">Nazwisko</label>
            <input id="second_name" type="text" placeholder="" name="second_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->second_name;?>
">
        </div>
        
        <div class="pure-control-group">
            <label for="quantity">NIP</label>
            <input id="NIP" type="text" placeholder="*NIE WYMAGANE" name="NIP" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->NIP;?>
">
        </div>
        
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
