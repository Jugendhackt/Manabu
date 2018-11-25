<?php
/* Smarty version 3.1.33, created on 2018-11-25 11:49:16
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa7e2c6a4c84_45508566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc184ee63c2333c75f545c8782051bebc15664ce' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/main.tpl',
      1 => 1543142898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7e2c6a4c84_45508566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7083157915bfa7e2c6a34c9_97238054', "head");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "basic.tpl");
}
/* {block "head"} */
class Block_7083157915bfa7e2c6a34c9_97238054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_7083157915bfa7e2c6a34c9_97238054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="style/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
}
}
/* {/block "head"} */
}
