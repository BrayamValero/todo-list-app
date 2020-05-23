<?php
require_once("../class/color.class.php");
$objColor=new Color;

$objColor->assignValue();

include_once("../../security/security-csrf.php");

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