<?php
require_once("../class/task.class.php");
require_once("../class/task-list.class.php");
$objTask=new Task;
$objTaskList=new TaskList;

$objTask->assignValue();

include_once("../../security/security-csrf.php");

switch ($objTask->action) {
    case 'insert':
        $objTask->sta_task="I";
        $objTask->insert();
        $last_id=$objTask->lastIdInserted();

        if ($last_id>0) {
            
        if((isset($objTask->nam_task_list))>0){
            foreach ($objTask->nam_task_list as $key => $value) {
                $objTaskList->nam_task_list=$value;
                $objTaskList->fky_task=$last_id;
                $objTaskList->sta_task_list="I";
                $objTaskList->insert();
            }
        }
        
        }
        break;
}
?>