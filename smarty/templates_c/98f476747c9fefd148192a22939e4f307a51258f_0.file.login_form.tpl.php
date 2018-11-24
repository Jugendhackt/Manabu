<?php
/* Smarty version 3.1.33, created on 2018-11-24 20:19:56
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf9a45c944b22_68203480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f476747c9fefd148192a22939e4f307a51258f' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/login_form.tpl',
      1 => 1543076177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf9a45c944b22_68203480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15723031395bf9a45c943554_81158925', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_15723031395bf9a45c943554_81158925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_15723031395bf9a45c943554_81158925',
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
