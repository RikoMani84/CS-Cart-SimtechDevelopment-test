<?php
/* Smarty version 4.1.0, created on 2022-11-28 12:34:12
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\common\comet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6384809491fcd3_43764296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9c6176adaa830889f1c28a23b3fdde32110c4e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6384809491fcd3_43764296 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
                        <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }
}
