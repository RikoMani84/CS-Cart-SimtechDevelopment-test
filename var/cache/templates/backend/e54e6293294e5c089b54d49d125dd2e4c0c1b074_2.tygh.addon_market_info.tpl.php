<?php
/* Smarty version 4.1.0, created on 2022-11-30 16:22:44
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\views\addons\components\detailed_page\sidebar\addon_market_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6387592472b650_13294475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54e6293294e5c089b54d49d125dd2e4c0c1b074' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\views\\addons\\components\\detailed_page\\sidebar\\addon_market_info.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/stars.tpl' => 1,
  ),
),false)) {
function content_6387592472b650_13294475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace','rating','addons.no_reviews','developer','category','addons.other_category','view_in_marketplace'));
if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] && $_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("cscart_marketplace");?>
</h6>

                <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label" for="addon_rating"><?php echo $_smarty_tpl->__("rating");?>
:</label>
            <div class="controls sidebar__controls">

                <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_reviews'=>smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value),'link'=>true), 0, false);
?>
                <?php } else { ?>
                    <span class="muted">
                        <?php echo $_smarty_tpl->__("addons.no_reviews");?>

                    </span>
                <?php }?>

            </div>
        </div>

                <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("developer");?>
:</label>
            <div class="controls sidebar__controls">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_developer_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    target="_blank"
                >
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

                </a>
            </div>
        </div>

                <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("category");?>
:</label>
            <div class="controls sidebar__controls">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_category_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    target="_blank"
                >
                    <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['addon']->value['category_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("addons.other_category") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                </a>
            </div>
        </div>

                <div class="control-group">
            <p>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_marketplace_page']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("view_in_marketplace");?>
</a>
            </p>
        </div>
    </div>
<?php }
}
}
