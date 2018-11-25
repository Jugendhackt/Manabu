<?php
/* Smarty version 3.1.33, created on 2018-11-25 12:53:03
  from '/var/www/html/manabu/smarty/templates/basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa8d1fce7a43_80246841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d562c5d886aa40f76a4c0b8e9799232ecd9e71' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/basic.tpl',
      1 => 1543146778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa8d1fce7a43_80246841 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15638342715bfa8d1fce2199_60748973', 'head');
?>

  </head>
  <body>
    <header class="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12155540825bfa8d1fce3545_46174767', 'header');
?>

    </header>
    <nav class="navbar navbar-fixed-top navbar-light bg-dark text-white">
      <div class="navbar-header">
        <a class="navbar-brand text-white" href="tree.php"><!--<img src="/src/logo.svg" alt="Manabu" height="40px">-->Manabu</a>
      </div>
       <ul class="nav navbar-nav">
          <li class="nav-item"><a href="logout.php" class="nav-link text-white">Abmelden</a></li>
       </ul>
    </nav>
    <main class="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mainClass']->value, ENT_QUOTES, 'ISO-8859-1', true))===null||$tmp==='' ? '' : $tmp);?>
">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_550310345bfa8d1fce6c51_00218532', 'main');
?>

    </main>
  </body>
</html>
<?php }
/* {block 'head'} */
class Block_15638342715bfa8d1fce2199_60748973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15638342715bfa8d1fce2199_60748973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_12155540825bfa8d1fce3545_46174767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12155540825bfa8d1fce3545_46174767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_550310345bfa8d1fce6c51_00218532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_550310345bfa8d1fce6c51_00218532',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
