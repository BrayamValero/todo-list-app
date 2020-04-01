<?php
require_once("../class/notification.class.php");
$objNotification=new notification;

$objNotification->assign_value();

switch ($objNotification->action) {
    case 'insert':
        $objNotification->insert();
        break;
    
    case 'update':
        $objNotification->update();
        break;
    
    case 'delete':
        $objNotification->delete();
        break;
}
?>