<?php
/* Smarty version 3.1.33, created on 2018-11-24 12:34:27
  from '/var/www/html/manabu/smarty/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf93743cd4d63_64602585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c3baa0107097c3178c6332a05a464d82683fe3' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/login.tpl',
      1 => 1543058903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf93743cd4d63_64602585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_904669115bf93743cc9410_27702652', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_904669115bf93743cc9410_27702652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_904669115bf93743cc9410_27702652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="loginprocess.php" method="post">
    <input type="text" name="user" />
    <input type="password" name="passwd" />
    <button type="submit" name="login">Anmelden</button>
  </form>
<?php
}
}
/* {/block 'main'} */
}
