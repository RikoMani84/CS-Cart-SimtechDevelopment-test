<?php
/* Smarty version 4.1.0, created on 2022-11-29 17:46:46
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\common\notify_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63861b56b2e8d4_54655150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a986aecf60d3e9bcce14044540a9acec377f0c39' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\common\\notify_checkboxes.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63861b56b2e8d4_54655150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('notify_customer','notify_orders_department','notify_vendor'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"select_popup:notify_checkboxes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"select_popup:notify_checkboxes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('name_prefix', (($tmp = $_smarty_tpl->tpl_vars['name_prefix']->value ?? null)===null||$tmp==='' ? "__notify" ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['notify']->value) {?>
        <li class="divider"></li>
        <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify">
            <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_user" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['notify_customer_status']->value == true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_user]').prop('checked', this.checked);" />
            <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['notify_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("notify_customer") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</label></a>
        </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['notify_department']->value) {?>
        <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_department">
            <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_department" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_department" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['notify_department_status']->value == true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_department]').prop('checked', this.checked);" />
            <?php echo $_smarty_tpl->__("notify_orders_department");?>
</label></a>
        </li>
    <?php }?>
    <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['notify_vendor']->value) {?>
        <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_vendor">
            <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_vendor" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_vendor" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['notify_vendor_status']->value == true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_vendor]').prop('checked', this.checked);" />
            <?php echo $_smarty_tpl->__("notify_vendor");?>
</label></a>
        </li>
    <?php }?>            
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"select_popup:notify_checkboxes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
