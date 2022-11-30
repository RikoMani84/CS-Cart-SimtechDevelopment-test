<?php
use Tygh\Registry;
if ($mode == 'manage') {
    $staff_members ="SELECT * FROM staff_members ";
    $staff_members = db_query(
        "SELECT * FROM ?:staff_members");
    Registry::get('view')->assign('staff_members', $staff_members);
}
if ($mode == 'picker') {
    Tygh::$app['view']->display('addons/staff_members/pickers/staff_members/picker_contents.tpl');
    exit;
}