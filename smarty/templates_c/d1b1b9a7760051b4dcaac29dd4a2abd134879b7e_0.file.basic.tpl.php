<?php
/* Smarty version 3.1.33, created on 2018-11-25 11:39:19
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa7bd76a04e0_40368470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b1b9a7760051b4dcaac29dd4a2abd134879b7e' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/basic.tpl',
      1 => 1543142317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7bd76a04e0_40368470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17913170845bfa7bd769d400_86397632', 'head');
?>

  </head>
  <body>
    <header class="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16339328465bfa7bd769de63_68466396', 'header');
?>

    </header>
    <main class="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mainClass']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5923793775bfa7bd769fde8_85610053', 'main');
?>

    </main>
  </body>
</html>
<?php }
/* {block 'head'} */
class Block_17913170845bfa7bd769d400_86397632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_17913170845bfa7bd769d400_86397632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_16339328465bfa7bd769de63_68466396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16339328465bfa7bd769de63_68466396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_5923793775bfa7bd769fde8_85610053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5923793775bfa7bd769fde8_85610053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
