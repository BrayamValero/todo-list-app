<?php
require_once("../class/notification.class.php");
$objNotification=new Notification;

$objNotification->assignValue();

include_once("../../security/security-csrf.php");

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