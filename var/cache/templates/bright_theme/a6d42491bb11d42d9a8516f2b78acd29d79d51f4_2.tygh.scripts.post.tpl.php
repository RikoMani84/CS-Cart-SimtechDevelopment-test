<?php
/* Smarty version 4.1.0, created on 2022-11-28 12:34:39
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\themes\responsive\templates\addons\store_locator\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638480afcc5442_26158900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d42491bb11d42d9a8516f2b78acd29d79d51f4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\themes\\responsive\\templates\\addons\\store_locator\\hooks\\index\\scripts.post.tpl',
      1 => 1669627981,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638480afcc5442_26158900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/store_locator/locator.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/store_locator/locator.js"),$_smarty_tpl);?>

<?php }
}
}
