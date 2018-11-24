<?php
/* Smarty version 3.1.33, created on 2018-11-24 17:30:36
  from '/var/www/html/manabu/smarty/templates/insert_grade.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf97cac629ec2_62654924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74ffa0866983cdcb5879d724cdc3a9f11fddcfb3' => 
    array (
      0 => '/var/www/html/manabu/smarty/templates/insert_grade.tpl',
      1 => 1543077029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf97cac629ec2_62654924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15232771385bf97cac627ee0_48584050', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_15232771385bf97cac627ee0_48584050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_15232771385bf97cac627ee0_48584050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/manabu/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>

  <form action="?param=addgrade" method="post">
    <div>
      <label for="subject">Fach</label>
      <select name="subject" required>
        <option value="" disabled selected>Fach auswählen</option>
       <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['subjects']->value,'output'=>$_smarty_tpl->tpl_vars['subjects']->value),$_smarty_tpl);?>

     </select>
    </div>
    <div>
      <label for="grade">Note</label>
      <input type="number" min="0.75" max="6" step="0.25" value="3" />
    </div>
    <div>
      <label for="description">Beschreibung</label>
      <input type="text" name="description" />
    </div>
    <div>
      <label for="weigh">Gewichtung</label>
      <input type="number" name="weigh" min="1" max="5" value="1" />
    </div>
    <div>
      <button>Speichern</button>
    </div>
  </form>
<?php
}
}
/* {/block 'main'} */
}
