<?php
/* Smarty version 4.1.0, created on 2022-11-30 20:03:03
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\addons\yml_export\common\yml_delivery_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63878cc79186a0_80135719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c72eb44a6192063675ad09d6b2371e8b46bec1b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\addons\\yml_export\\common\\yml_delivery_options.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/multiple_buttons.tpl' => 2,
  ),
),false)) {
function content_63878cc79186a0_80135719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.delivery_options','yml_export.delivery_cost','yml_export.delivery_days','yml_export.order_before','yml_export.delivery_cost','yml_export.delivery_days','yml_export.order_before','yml_export.delivery_cost','yml_export.delivery_days','yml_export.order_before'));
?>
<div class="control-group">
    <label for="yml2_pickup" class="control-label"><?php echo $_smarty_tpl->__("yml_export.delivery_options");?>
:</label>
    <div class="controls">
        <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive">
                <thead>
                <tr>
                    <th width="15%"><?php echo $_smarty_tpl->__("yml_export.delivery_cost");?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->__("yml_export.delivery_days");?>
</th>
                    <th><?php echo $_smarty_tpl->__("yml_export.order_before");?>
</th>
                    <th class="cm-non-cb">&nbsp;</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'option', false, NULL, 'option_index', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_option_index']->value['iteration']++;
?>
                    <?php $_smarty_tpl->_assignInScope('num', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_option_index']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_option_index']->value['iteration'] : null));?>
                    <tbody class="hover cm-row-item" id="delivery_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <tr>
                        <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_cost");?>
">
                            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][cost]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['cost'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_days");?>
">
                            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][days]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['days'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("yml_export.order_before");?>
">
                            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][order_before]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['order_before'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />
                        </td>
                        <td class="right cm-non-cb">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"option_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['num']->value),'tag_level'=>"3",'only_delete'=>"Y"), 0, true);
?>
                        </td>
                    </tbody>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = $_smarty_tpl->tpl_vars['num']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)),$_smarty_tpl);?>


                <tbody class="hover cm-row-item" id="box_add_delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_cost");?>
">
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][cost]" size="20" value="" class="input-mini" />
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("yml_export.delivery_days");?>
">
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][days]" size="20" value="" class="input-mini" />
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("yml_export.order_before");?>
">
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][order_before]" size="20" value="" class="input-mini" />
                    </td>
                    <td class="right cm-non-cb">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"add_delivery_option_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>"2"), 0, true);
?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
