<?php
/* Smarty version 3.1.33, created on 2018-11-24 20:20:05
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/login_failed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf9a4656dc1e3_18822933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b95994ee15e93dadad340548a4ef1a5f43b171ca' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/login_failed.tpl',
      1 => 1543070527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf9a4656dc1e3_18822933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4404748085bf9a4656db733_68499358', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_4404748085bf9a4656db733_68499358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_4404748085bf9a4656db733_68499358',
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
