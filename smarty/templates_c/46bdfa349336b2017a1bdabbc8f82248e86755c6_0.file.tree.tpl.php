<?php
/* Smarty version 3.1.33, created on 2018-11-25 11:32:35
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa7a43c5e7e4_91623579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46bdfa349336b2017a1bdabbc8f82248e86755c6' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/tree.tpl',
      1 => 1543141837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7a43c5e7e4_91623579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4599681125bfa7a43c41b62_17789139', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "main"} */
class Block_4599681125bfa7a43c41b62_17789139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_4599681125bfa7a43c41b62_17789139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tree">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subjectsArray']->value, 'subject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
?> <!-- layer 0 -->
    <div class="subject container m-5">
      <a href="tree.php?param=detailSubject&amp;sid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a>
          <span class="smark p-2 text-muted">
            Ø <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value['grades']['average'], ENT_QUOTES, 'UTF-8', true);?>

          </span>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="fixed-bottom"><a href="?param=addgrade" class="btn btn-primary btn-large m-5">Neu</a></div>

<?php
}
}
/* {/block "main"} */
}
