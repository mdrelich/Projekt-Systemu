<?php
/* Smarty version 3.1.30, created on 2021-06-05 14:38:15
  from "C:\xampp\htdocs\php_09_bd\app\views\premium.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bb7037578be3_62662773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9bcf872a3a1afbac428c414ce500a8e5779ca61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\premium.tpl',
      1 => 1622896694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60bb7037578be3_62662773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144325310760bb7037574066_64971730', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140359257460bb7037578704_62788832', 'bottom');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_144325310760bb7037574066_64971730 extends Smarty_Internal_Block
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
class Block_140359257460bb7037578704_62788832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php if (\core\RoleUtils::inRole('Premium') || \core\RoleUtils::inRole('admin') || \core\RoleUtils::inRole('pracownik')) {?>
    <center>PLANY TRENINGOWE I DIETA DLA UZYTKOWNIKOW PREMIUM<br>
    <img src="https://i2.wp.com/www.codzienniefit.pl/wp-content/uploads/2014/07/harmonogram-treningow.jpg?resize=640%2C452" width="1150 " height="750"></center>
<?php }
if (\core\RoleUtils::inRole('kupujacy')) {?>
    <center>KUP KONTO PREMIUM ABY KORZYSTAC Z TEJ FUNKCJI</center>
<?php }
}
}
/* {/block 'bottom'} */
}
