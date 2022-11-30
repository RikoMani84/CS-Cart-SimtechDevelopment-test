<?php
/* Smarty version 4.1.0, created on 2022-11-30 18:28:43
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\views\sales_reports\components\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638776abe925f6_98277425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb8a8261c0062af797c216e7019ebd23bcdc855' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\views\\sales_reports\\components\\table.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/price.tpl' => 4,
    'tygh:views/sales_reports/components/graph_bar.tpl' => 1,
  ),
),false)) {
function content_638776abe925f6_98277425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),4=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('table_conditions','total','total'));
echo smarty_function_script(array('src'=>"js/tygh/infinite_scroll.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value]) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("table_conditions"),'meta'=>"collapsed",'target'=>"#box_table_conditions_".((string)$_smarty_tpl->tpl_vars['table_id']->value)), 0, false);
?>
    <div id="box_table_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse">
        <dl class="dl-horizontal">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value], 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
            <dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8');?>
:</dt>
            <dd>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['i']->value['objects'], 'o', false, NULL, 'feco', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_feco']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_feco']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_feco']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_feco']->value['total'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['href']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['o']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['o']->value['href']) {?></a><?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_feco']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_feco']->value['last'] : null)) {?>, <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </dd>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </dl>
    </div>
<?php }?>

<?php $_smarty_tpl->_assignInScope('ajax_div_ids', ((string)$_smarty_tpl->tpl_vars['table_id']->value).",data_list_orders_".((string)$_smarty_tpl->tpl_vars['table_id']->value));?>

<?php if ($_smarty_tpl->tpl_vars['table']->value['interval_id'] != 1) {?>

<div class="cm-scroll-data scroll-data--fullwidth" id="scroll_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" id="count_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_limit']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" id="begin_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_part']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <div class="table-wrapper">
    <table width="100%" class="table table--relative cm-table-list-orders">
        <thead class="cm-table-thead">
        <tr valign="top">
            <th style="padding: 1px;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'UTF-8');?>
</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['intervals'], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <th class="center cm-tooltip" style="padding: 1px;">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['iso8601_from'], ENT_QUOTES, 'UTF-8');?>
 &ndash; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['iso8601_to'], ENT_QUOTES, 'UTF-8');?>
" class="cm-tooltip"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign"),$_smarty_tpl);?>
</a></th>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        </thead>
        <tbody class="cm-scroll-content cm-ajax cm-table-tbody" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo smarty_function_cycle(array('values'=>'','assign'=>''),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['elements'], 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
                <tr>
                    <td class="sales-report-title" ><?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;</td>
                    <?php $_smarty_tpl->_assignInScope('element_hash', $_smarty_tpl->tpl_vars['element']->value['element_hash']);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['intervals'], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('interval_id', $_smarty_tpl->tpl_vars['row']->value['interval_id']);?>
                        <td class="center">
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]) {?>
                                <?php if ($_smarty_tpl->tpl_vars['table']->value['display'] != "product_number" && $_smarty_tpl->tpl_vars['table']->value['display'] != "order_number") {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0, true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'UTF-8');
}?>
                            <?php } else { ?>-<?php }?>
                        </td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['totals']->value) {?>
                <tr class="td-no-bg cm-table-footer" id="total_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <td class="right"><?php echo $_smarty_tpl->__("total");?>
:</td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['totals']->value, 'row', false, 'k_row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k_row']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <td class="center">
                            <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>
                                <span><?php if ($_smarty_tpl->tpl_vars['table']->value['display'] != "product_number" && $_smarty_tpl->tpl_vars['table']->value['display'] != "order_number") {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0, true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'UTF-8');
}?></span>
                            <?php } else { ?>-<?php }?>
                        </td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
--></tbody>
    </table>
    </div>
</div>
<?php } else { ?>
<div class="cm-scroll-data scroll-data--fullwidth" id="scroll_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" id="count_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_limit']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" id="begin_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_part']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <div class="table-responsive-wrapper">
    <table class="table table-middle table--relative">
        <thead id="elm_head_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_part']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-table-thead">
            <tr valign="top">
                <th style="padding: 1px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'UTF-8');?>
</th>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['intervals'], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('interval_id', $_smarty_tpl->tpl_vars['row']->value['interval_id']);?>
                    <?php $_smarty_tpl->_assignInScope('interval_name', "reports_interval_".((string)$_smarty_tpl->tpl_vars['interval_id']->value));?>
                    <th class="right" width="70%"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['interval_name']->value);?>
</th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        </thead>
        <tbody class="cm-scroll-content cm-ajax cm-table-tbody" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('elements_count', smarty_modifier_sizeof($_smarty_tpl->tpl_vars['table']->value['elements']));?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['elements'], 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('element_hash', $_smarty_tpl->tpl_vars['element']->value['element_hash']);?>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value['intervals'], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('interval_id', $_smarty_tpl->tpl_vars['row']->value['interval_id']);?>
                        <?php echo smarty_function_math(array('equation'=>"round(element_value/max_value*100)",'element_value'=>(($tmp = $_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'max_value'=>(($tmp = $_smarty_tpl->tpl_vars['table']->value['max_value'] ?? null)===null||$tmp==='' ? "1" ?? null : $tmp),'assign'=>"percent_value"),$_smarty_tpl);?>

                        <td width="85%">
                            <?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/sales_reports/components/graph_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value_width'=>$_smarty_tpl->tpl_vars['percent_value']->value), 0, true);
?>
                        </td>
                        <td class="right">
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]) {?>
                                <?php if ($_smarty_tpl->tpl_vars['table']->value['display'] != "product_number" && $_smarty_tpl->tpl_vars['table']->value['display'] != "order_number") {?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0, true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            <?php } else { ?>
                                -
                            <?php }?>
                        </td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['totals']->value) {?>
            <tr class="td-no-bg" id="total_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <td class="right" width="70%"><?php if ($_smarty_tpl->tpl_vars['totals']->value) {
echo $_smarty_tpl->__("total");?>
:<?php }?></td>
                <td class="right" width="30%">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['totals']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['display'] != "product_number" && $_smarty_tpl->tpl_vars['table']->value['display'] != "order_number") {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0, true);
?>
                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php } else { ?>
                            -
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
            </tr>
            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
--></tbody>
    </table>
    </div>
</div>
<?php }
}
}
