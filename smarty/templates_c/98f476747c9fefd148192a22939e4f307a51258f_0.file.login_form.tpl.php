<?php
/* Smarty version 3.1.33, created on 2018-11-25 10:57:13
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa71f91f2392_53795897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f476747c9fefd148192a22939e4f307a51258f' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/login_form.tpl',
      1 => 1543139830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa71f91f2392_53795897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14967529295bfa71f91f0157_54857538', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_14967529295bfa71f91f0157_54857538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14967529295bfa71f91f0157_54857538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="login.php?param=login" method="post" class="align-middle m-3 p-2">
    <div class="form-group">
      <label for="user">Nutzername</label>
      <input type="text" id="user" name="user" class="form-control" placeholder="Benutzer" />
    </div>
    <div class="form-group">
      <label for="passwd">Passwort</label>
      <input type="password" id="passwd" class="form-control" name="passwd" placeholder="Passwort" />
    </div>
    <button type="submit" name="login" class="btn btn-success">Anmelden</button>
  </form>
<?php
}
}
/* {/block 'main'} */
}
