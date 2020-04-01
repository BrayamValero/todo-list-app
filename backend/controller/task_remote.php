<?php
require_once("../class/task.class.php");
require_once("../class/task_list.class.php");
$objTask=new task;
$objTaskList=new task_list;

$objTask->assign_value();

switch ($objTask->action) {
    case 'insert':
        $objTask->sta_task="I";
        $objTask->insert();
        $last_id=$objTask->last_id_inserted();

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