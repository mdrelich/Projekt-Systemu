<?php
/* Smarty version 3.1.30, created on 2021-01-28 01:14:29
  from "F:\xampp\htdocs\php_09_bd\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601201e50f8879_83214944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b824d650a6161acc357306a359d165285a39e3e0' => 
    array (
      0 => 'F:\\xampp\\htdocs\\php_09_bd\\app\\views\\LoginView.tpl',
      1 => 1611792868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_601201e50f8879_83214944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1858121659601201e50f83a1_92997299', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1858121659601201e50f83a1_92997299 extends Smarty_Internal_Block
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
