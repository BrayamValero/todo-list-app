<?php
$currentFile=basename($_SERVER['PHP_SELF']);
$direction=getcwd();
$directoryDirection=explode(DIRECTORY_SEPARATOR, $direction);
foreach ($directoryDirection as $key => $value) {
    if($value=="controller"){
        $securityDirection="../class/security.class.php";
        $logDirection="../class/log-info.class.php";
        $generalUrl="../../index.php";    
    }elseif($value=="todo-list-app"){
        $securityDirection="backend/class/security.class.php";
        $logDirection="backend/class/log-info.class.php";
        $generalUrl="index.php"; 
    }
}
if(!isset($objSecurity) && !isset($objLogInfo)){
require_once("$securityDirection");
require_once("$logDirection");
$objSecurity=new Security;
$objLogInfo=new LogInfo;
}

$objSecurity->serverSession();
$currentFile=basename($_SERVER['PHP_SELF']);

if($currentFile!="index.php"){
    if(isset($_POST['csrfToken'])){
        $objSecurity->csrfToken=$_POST['csrfToken'];
        $check=$objSecurity->checkCsrf();
        if($check==true){
            $csrfToken=$objSecurity->generateCsrf();
            $objSecurity->csrfToken=$csrfToken;
            $objSecurity->csrf();
        }else{
            header("Location: $generalUrl");
        }
    }else{
        if($value!="controller"){
            if(!empty($_SESSION['csrfToken'])){
                $csrfToken=$objSecurity->generateCsrf();
                $objSecurity->csrfToken=$csrfToken;
                $objSecurity->csrf();
            }else{
                header("Location: $generalUrl");
                $csrfToken=$objSecurity->generateCsrf();
                $objSecurity->csrfToken=$csrfToken;
            }
        }elseif($value=='controller' && !isset($_REQUEST['accion'])){
            if(empty($_SESSION['csrfToken'])){
                $csrfToken=$objSecurity->generateCsrf();
                $objSecurity->csrfToken=$csrfToken;
                $objSecurity->csrf();
            }else{
                header("Location: $generalUrl");
                $csrfToken=$objSecurity->generateCsrf();
                $objSecurity->csrfToken=$csrfToken;
            }
        }
    }
}
?>