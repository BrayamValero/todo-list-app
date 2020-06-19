<?php
require_once("../class/task-list.class.php");
$objTaskList=new TaskList;

$objTaskList->assignValue();

include_once("../../security/security-csrf.php");

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