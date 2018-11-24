<?php
/* Smarty version 3.1.33, created on 2018-11-24 20:18:31
  from '/var/www/html/manabu/smarty/templates/tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf9a407b40c41_81908825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a9f94cf6bcd89a495650fd82fe03a04a793eb3' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/tree.tpl',
      1 => 1543087099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf9a407b40c41_81908825 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree">
  <div class="trunk"></div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'from', 'subject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
?>
    <div class="subject">
      <div class="branch"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value['name'], ENT_QUOTES, 'ISO-8859-1', true);?>
</div> -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'from', 'level');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level']->value) {
?>
        <div class="level">
          <div class="mark">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value['mark'], ENT_QUOTES, 'ISO-8859-1', true);?>

          </div>
          <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value['name'], ENT_QUOTES, 'ISO-8859-1', true);?>
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
<?php }
}
