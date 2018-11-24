<?php
/* Smarty version 3.1.33, created on 2018-11-24 22:16:21
  from '/var/www/html/manabu/smarty/templates/tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf9bfa50581b9_76537038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a9f94cf6bcd89a495650fd82fe03a04a793eb3' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/tree.tpl',
      1 => 1543094174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf9bfa50581b9_76537038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7213383515bf9bfa504e8f3_40475765', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "main"} */
class Block_7213383515bf9bfa504e8f3_40475765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_7213383515bf9bfa504e8f3_40475765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tree">
  <div class="trunk"></div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subjectsArray']->value, 'subject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
?> <!-- layer 0 -->
    <div class="subject">
      <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value['name'], ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subject']->value['grades'], 'grade');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->value) {
?> <!-- layer 1 --> 
        <div class="level">
          <div class="mark">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value['grade'], ENT_QUOTES, 'ISO-8859-1', true);?>

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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block "main"} */
}
