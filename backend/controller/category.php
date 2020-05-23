<?php 
require_once("../class/category.class.php");
$objCategory=new Category;
$objCategory->assignValue();

include_once("../../security/security-csrf.php");

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