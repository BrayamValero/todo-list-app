<?php
require_once("../class/color.class.php");
$objColor=new color;

$objColor->assign_value();

switch ($objColor->action) {
    case 'insert':
        $objColor->insert();
        break;
    
    case 'update':
        $objColor->update();
        break;
    
    case 'delete':
        $objColor->delete();
        break;
}
?>