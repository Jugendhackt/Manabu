<?php
/* Smarty version 3.1.33, created on 2018-11-24 12:34:27
  from '/var/www/html/manabu/smarty/templates/basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf93743d346e4_70068797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d562c5d886aa40f76a4c0b8e9799232ecd9e71' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/basic.tpl',
      1 => 1543058639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf93743d346e4_70068797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageTitle']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7726502275bf93743d325c3_95275868', 'head');
?>

  </head>
  <body>
    <header>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12729669045bf93743d333a9_71812746', 'header');
?>

    </header>
    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2268256985bf93743d33f40_77818139', 'main');
?>

    </main>
  </body>
</html>
<?php }
/* {block 'head'} */
class Block_7726502275bf93743d325c3_95275868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_7726502275bf93743d325c3_95275868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_12729669045bf93743d333a9_71812746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12729669045bf93743d333a9_71812746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_2268256985bf93743d33f40_77818139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_2268256985bf93743d33f40_77818139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
