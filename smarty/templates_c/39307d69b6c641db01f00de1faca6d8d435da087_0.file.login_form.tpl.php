<?php
/* Smarty version 3.1.33, created on 2018-11-24 16:38:57
  from '/var/www/html/manabu/smarty/templates/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf9709184da76_35213036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39307d69b6c641db01f00de1faca6d8d435da087' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/login_form.tpl',
      1 => 1543073931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf9709184da76_35213036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15862544315bf9709184cbd0_63539611', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_15862544315bf9709184cbd0_63539611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_15862544315bf9709184cbd0_63539611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="login.php?param=login" method="post">
    <input type="text" name="user" placeholder="Benutzer" />
    <input type="password" name="passwd" placeholder="Passwort" />
    <button type="submit" name="login" class="btn btn-success">Anmelden</button>
  </form>
<?php
}
}
/* {/block 'main'} */
}
