<?php
/* Smarty version 3.1.33, created on 2018-11-24 15:45:50
  from '/var/www/html/manabu/smarty/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf9641e722884_02442471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4bf84a205f53cdcc6f5fb2f51d218c621a48837' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/main.tpl',
      1 => 1543070029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf9641e722884_02442471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10555594475bf9641e721f31_80635962', "head");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "basic.tpl");
}
/* {block "head"} */
class Block_10555594475bf9641e721f31_80635962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_10555594475bf9641e721f31_80635962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<?php
}
}
/* {/block "head"} */
}
