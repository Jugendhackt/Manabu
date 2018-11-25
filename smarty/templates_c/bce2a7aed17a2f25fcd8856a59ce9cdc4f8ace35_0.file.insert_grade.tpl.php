<?php
/* Smarty version 3.1.33, created on 2018-11-25 11:27:01
  from '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/insert_grade.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfa78f536ff42_59128894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce2a7aed17a2f25fcd8856a59ce9cdc4f8ace35' => 
    array (
      0 => '/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/smarty/templates/insert_grade.tpl',
      1 => 1543141618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa78f536ff42_59128894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11994677975bfa78f5369cf1_52536261', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_11994677975bfa78f5369cf1_52536261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11994677975bfa78f5369cf1_52536261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/jonathan/proj/Programme/jHackt/JugendHackt_Manabu/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>

  <form action="?param=addgrade" method="post" class="align-middle m-3 p-2">
    <div class="form-group">
      <label for="subject">Fach</label>
      <select name="subject" class="form-control" required>
        <option value="" disabled selected>Fach auswählen</option>
       <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['subjects']->value,'output'=>$_smarty_tpl->tpl_vars['subjects']->value),$_smarty_tpl);?>

     </select>
    </div>
    <div class="form-group">
      <label for="grade">Note</label>
      <input name="grade" class="form-control" type="number" min="0.75" max="6" step="0.25" value="3" />
    </div>
    <div class="form-group">
      <label for="weight">Gewichtung</label>
      <input name="weight" class="form-control" type="number" name="weigh" min="1" max="5" value="1" />
    </div>
    <div class="form-group" >
      <button type="submit" class="btn btn-primary" name="submitGrade" class="btn btn-primary">Speichern</button>
    </div>
  </form>
<?php
}
}
/* {/block 'main'} */
}
