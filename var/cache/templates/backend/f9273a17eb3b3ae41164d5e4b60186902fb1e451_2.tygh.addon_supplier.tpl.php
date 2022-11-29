<?php
/* Smarty version 4.1.0, created on 2022-11-28 17:09:54
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\views\addons\components\addons\addon_supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6384c132d57ca7_73837320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9273a17eb3b3ae41164d5e4b60186902fb1e451' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_supplier.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6384c132d57ca7_73837320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
    <div class="addons-addon-supplier">
        <a href="<?php echo htmlspecialchars(fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['a']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
" class="addons-addon-supplier__name row-status">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['identified'] || $_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--".((string)(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'))),'title'=>$_smarty_tpl->__("verified_developer")),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['personal_review']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment addons-addon-supplier__has-admin-review",'title'=>$_smarty_tpl->__("addon_has_admin_review")),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }
}
}
