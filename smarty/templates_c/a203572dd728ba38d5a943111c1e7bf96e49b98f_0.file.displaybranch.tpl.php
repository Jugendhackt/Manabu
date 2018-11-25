<?php
/* Smarty version 3.1.33, created on 2018-11-25 10:20:15
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/displaybranch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa694f946082_37414459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a203572dd728ba38d5a943111c1e7bf96e49b98f' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/displaybranch.tpl',
      1 => 1543137565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa694f946082_37414459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19643258345bfa694f932fa1_42949756', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_19643258345bfa694f932fa1_42949756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19643258345bfa694f932fa1_42949756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="branch">
    <div class="subjectname"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subjectname']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
    <div class="average"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grades']->value, 'grade');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->value) {
?>
      <div class="grade">
          <div class="name">Gewichtung: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value['weight'], ENT_QUOTES, 'UTF-8', true);?>
</div>
          <div class="value">Note: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value['grade'], ENT_QUOTES, 'UTF-8', true);?>
</div>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
}
/* {/block 'main'} */
}
