<?php
/* Smarty version 3.1.33, created on 2018-11-24 19:39:07
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf99acb066bd4_88421527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b1b9a7760051b4dcaac29dd4a2abd134879b7e' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/basic.tpl',
      1 => 1543060024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf99acb066bd4_88421527 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4091675865bf99acb065bb1_70542476', 'head');
?>

  </head>
  <body>
    <header>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15663320305bf99acb066223_66235550', 'header');
?>

    </header>
    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17957180415bf99acb066793_92660475', 'main');
?>

    </main>
  </body>
</html>
<?php }
/* {block 'head'} */
class Block_4091675865bf99acb065bb1_70542476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4091675865bf99acb065bb1_70542476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_15663320305bf99acb066223_66235550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15663320305bf99acb066223_66235550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_17957180415bf99acb066793_92660475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17957180415bf99acb066793_92660475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
