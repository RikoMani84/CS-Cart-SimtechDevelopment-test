<?php
/* Smarty version 4.1.0, created on 2022-11-30 20:02:48
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\components\context_menu\items\dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63878cb8eb2bc3_68282024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c7b143eba53279fee4de076d85af2506e09254b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\components\\context_menu\\items\\dropdown.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63878cb8eb2bc3_68282024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="btn bulk-edit__btn bulk-edit__btn--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 dropleft-mod <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
          data-toggle=".bulk-edit__content--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

        <span class="caret mobile-hide"></span>
    </span>

    <div class="bulk-edit--reset-dropdown-menu  bulk-edit__content bulk-edit__content--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="bulk-edit-inner bulk-edit-inner--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>

    <div class="bulk-edit--overlay"></div>
</li>
<?php }
}
