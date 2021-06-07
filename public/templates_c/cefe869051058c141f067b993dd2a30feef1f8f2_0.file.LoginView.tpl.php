<?php
/* Smarty version 3.1.30, created on 2021-06-02 11:24:02
  from "C:\xampp\htdocs\php_09_bd\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b74e321afad8_61261516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cefe869051058c141f067b993dd2a30feef1f8f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\LoginView.tpl',
      1 => 1622625679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60b74e321afad8_61261516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
pure 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183327207460b74e321af381_78324661', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_183327207460b74e321af381_78324661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
    </br></br></br>
	<fieldset>
    <div class="form-container sign-in-container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
            <legend><h2>Logowanie do systemu</h2></legend>
            <span>login:</span>
            <label>
                <input type="id_login" name="login" placeholder="podaj login"/>
            </label>
            </br>
            <span>hasło:</span>
            <label>
                <input type="id_password" name="password" placeholder="podaj haslo"/>
            </label>
        </form>
    </div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
<?php
}
}
/* {/block 'top'} */
}
