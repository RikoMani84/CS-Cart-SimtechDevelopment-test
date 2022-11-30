<?php
/* Smarty version 4.1.0, created on 2022-11-30 20:23:15
  from 'C:\OSPanel\domains\CS-Cart-SimtechDevelopment-test\design\backend\templates\addons\staff_members\views\staff_members\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63879183291585_18037987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3a90000878acf7e00df2ce39f5eed6829c3f7ff' => 
    array (
      0 => 'C:\\OSPanel\\domains\\CS-Cart-SimtechDevelopment-test\\design\\backend\\templates\\addons\\staff_members\\views\\staff_members\\manage.tpl',
      1 => 1669828992,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63879183291585_18037987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "staff_members_table", null, null);?>
    <form >
        <div class="" id="63876dfc014e2" data-ca-longtap="">
            <div class="table-responsive-wrapper longtap-selection">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
            <div class="nav__actions-adv-buttons adv-buttons" style="width: 100%;display: flex;justify-content: end;margin-top: 10px;"">
                <div class="btn-group ">
                    <a class="btn cm-tooltip" href="#">
                        <span class="cs-icon icon-plus"></span>                  
                    </a>
                </div>
            </div>
                <table class="table table-middle table--relative table-responsive">
                    <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staff_members']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                        <tr>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['staff']->value['id'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['staff']->value['first_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['staff']->value['last_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['staff']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['staff']->value['status'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['staff']->value['description'], ENT_QUOTES, 'UTF-8');?>
</td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </form>
<?php }
}
