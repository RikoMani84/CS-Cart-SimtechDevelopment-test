<?php
/* Smarty version 4.1.0, created on 2022-11-30 20:03:02
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\common\multiple_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63878cc6e8b2b0_42645531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0317e80791b50551c9d6e5590944b140de5bcc7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\common\\multiple_checkboxes.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63878cc6e8b2b0_42645531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'k');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['id_field']->value) {?>
        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['k']->value);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['name_field']->value) {?>
        <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name_field']->value]);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value);?>
    <?php }?>

    <label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input 
            type="checkbox" 
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
]" 
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['item_ids']->value)) {?>
                checked="checked"
            <?php }?> 
        />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>

    </label>
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
    <?php echo $_smarty_tpl->__("no_items");?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
