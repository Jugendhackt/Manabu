<?php
/* Smarty version 3.1.33, created on 2018-11-25 11:26:46
  from '/var/www/html/manabu/smarty/templates/not_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa78e6f3a392_35367247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '871eaa927165843e6936021fb28c5d86bb0742a6' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/not_logged_in.tpl',
      1 => 1543141589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa78e6f3a392_35367247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11842765355bfa78e6f38918_26106670', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "main"} */
class Block_11842765355bfa78e6f38918_26106670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11842765355bfa78e6f38918_26106670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="notification">Nicht angemeldet <a href="index.php">Zur Anmeldung</a></div>
<?php
}
}
/* {/block "main"} */
}
