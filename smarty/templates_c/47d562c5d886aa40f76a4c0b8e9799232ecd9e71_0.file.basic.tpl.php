<?php
/* Smarty version 3.1.33, created on 2018-11-25 11:55:51
  from '/var/www/html/manabu/smarty/templates/basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa7fb7a31c02_09100564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d562c5d886aa40f76a4c0b8e9799232ecd9e71' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/basic.tpl',
      1 => 1543142787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7fb7a31c02_09100564 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14053571195bfa7fb7a2d456_51061625', 'head');
?>

  </head>
  <body>
    <header class="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15385438785bfa7fb7a2e1c6_70158796', 'header');
?>

    </header>
    <main class="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mainClass']->value, ENT_QUOTES, 'ISO-8859-1', true))===null||$tmp==='' ? '' : $tmp);?>
">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7229184495bfa7fb7a312a2_20838804', 'main');
?>

    </main>
  </body>
</html>
<?php }
/* {block 'head'} */
class Block_14053571195bfa7fb7a2d456_51061625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14053571195bfa7fb7a2d456_51061625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_15385438785bfa7fb7a2e1c6_70158796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15385438785bfa7fb7a2e1c6_70158796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_7229184495bfa7fb7a312a2_20838804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_7229184495bfa7fb7a312a2_20838804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
