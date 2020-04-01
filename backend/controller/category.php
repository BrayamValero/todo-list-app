<?php 
require_once("../class/category.class.php");
$objCategory=new category;

$objCategory->assign_value();

switch ($objCategory->action) {
    case 'insert':
        $objCategory->insert();
        break;
    
    case 'update':
        $objCategory->update();
        break;

    case 'delete':
        $objCategory->delete();
        break;
}
?>