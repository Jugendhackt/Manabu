<?php
/* Smarty version 3.1.33, created on 2018-11-24 15:45:50
  from '/var/www/html/manabu/smarty/templates/login_failed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf9641e709924_91384613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f1926ebe2de741093b9744afe13b5b4a90a2c47' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/login_failed.tpl',
      1 => 1543070615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf9641e709924_91384613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13326018845bf9641e708e41_56876193', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_13326018845bf9641e708e41_56876193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_13326018845bf9641e708e41_56876193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="notification">Login fehlgeschlagen <a href="javascript:history.back();">Zurück</a></div>
<?php
}
}
/* {/block 'main'} */
}
