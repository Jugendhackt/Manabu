<?php
/* Smarty version 3.1.33, created on 2018-11-25 12:05:02
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa81dee17367_02290760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b1b9a7760051b4dcaac29dd4a2abd134879b7e' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/basic.tpl',
      1 => 1543143897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa81dee17367_02290760 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13643434125bfa81dee13082_99897782', 'head');
?>

  </head>
  <body>
    <header class="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2228692385bfa81dee14446_82189089', 'header');
?>

    </header>
    <nav class="navbar navbar-fixed-top navbar-light bg-dark text-white">
      <div class="navbar-header">
        <a class="navbar-brand text-white" href="tree.php">Manabu</a>
      </div>
       <ul class="nav navbar-nav">
          <li class="nav-item"><a href="logout.php" class="nav-link text-white">Abmelden</a></li>
       </ul>
    </nav>
    <main class="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mainClass']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17929149025bfa81dee16b20_11852499', 'main');
?>

    </main>
  </body>
</html>
<?php }
/* {block 'head'} */
class Block_13643434125bfa81dee13082_99897782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_13643434125bfa81dee13082_99897782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_2228692385bfa81dee14446_82189089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2228692385bfa81dee14446_82189089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_17929149025bfa81dee16b20_11852499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17929149025bfa81dee16b20_11852499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
