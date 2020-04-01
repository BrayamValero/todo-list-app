<?php
require_once("../class/task_list.class.php");
$objTaskList=new task_list;

$objTaskList->assign_value();

switch ($objTaskList->action) {
    case 'insert':
        $objTaskList->insert();
        break;
    
    case 'update':
        $objTaskList->update();
        break;
    
    case 'delete':
        $objTaskList->delete();
        break;
}
?>