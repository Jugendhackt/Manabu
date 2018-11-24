<?php
/* Smarty version 3.1.33, created on 2018-11-24 14:31:47
  from '/var/www/html/manabu/smarty/templates/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf952c386b505_46262976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39307d69b6c641db01f00de1faca6d8d435da087' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/login_form.tpl',
      1 => 1543063641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf952c386b505_46262976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5148141475bf952c386a691_93044484', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_5148141475bf952c386a691_93044484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5148141475bf952c386a691_93044484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="login.php?param=login" method="post">
    <input type="text" name="user" />
    <input type="password" name="passwd" />
    <button type="submit" name="login">Anmelden</button>
  </form>
<?php
}
}
/* {/block 'main'} */
}
