<?php
/* Smarty version 3.1.33, created on 2018-11-25 11:45:45
  from '/var/www/html/manabu/smarty/templates/displaybranch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa7d59cf0e80_08457062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ad4a7ac3998ae9dccab33695df23592165cc10' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/displaybranch.tpl',
      1 => 1543142740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7d59cf0e80_08457062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16958551775bfa7d59cb2450_66033124', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_16958551775bfa7d59cb2450_66033124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_16958551775bfa7d59cb2450_66033124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <a href="?" class="btn btn-primary mt-2">&lt; Zurück</a>
</div>
  <div class="branch container">
    <div class="">
      <h1 class="subjectname mb-0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subjectname']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
</h1>
      <div class="text-muted">Ø <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
    </div>
    <div class="">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grades']->value, 'grade');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->value) {
?>
      <div class="grade mt-3 p-2 align-center">
          <div class="name">Gewichtung: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value['weight'], ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
          <div class="value">Note: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value['grade'], ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  </div>
<?php
}
}
/* {/block 'main'} */
}
