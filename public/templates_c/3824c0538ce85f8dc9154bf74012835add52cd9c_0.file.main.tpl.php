<?php
/* Smarty version 3.1.30, created on 2021-06-02 10:54:51
  from "C:\xampp\htdocs\php_09_bd\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b7475bc78df3_35625735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3824c0538ce85f8dc9154bf74012835add52cd9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\templates\\main.tpl',
      1 => 1622624089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b7475bc78df3_35625735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Sklep ABC</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList" class="w3-bar-item w3-button w3-padding-large w3-white">Strona główna</a>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Wyloguj</a>
    <?php } else { ?>	
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Zaloguj</a>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) < 1) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerNew" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Rejestracja</a><?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cart" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Koszyk</a>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
history" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Historia zakupów</a><?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
premium" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">STREFA PREMIUM</a><?php }?>
  </div>
</div>
  
  

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188821189960b7475bc68fe6_99806469', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55402566360b7475bc72575_90606836', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127204956760b7475bc72e32_50653604', 'bottom');
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
/* {block 'top'} */
class Block_188821189960b7475bc68fe6_99806469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_55402566360b7475bc72575_90606836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_127204956760b7475bc72e32_50653604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
