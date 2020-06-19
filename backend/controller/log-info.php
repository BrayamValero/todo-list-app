<?php
require_once("../class/user.class.php");
require_once("../class/log-info.class.php");
require_once("../class/security.class.php");

$objUser=new User;
$objLogInfo=new LogInfo;
$objSecurity=new Security;

$objUser->assignValue();

include_once("../../security/security-csrf.php");

include_once("../../online/seguridad/seguridad_csrf.php");
if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $objUser->userMail)  && preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,20}/", $objUser->userPass)){
    switch ($_REQUEST['accion']) {
        case 'register_user':
            $objUser->userMail;
            $this->pointer=$objUser->verifyMail();
            $dato_usu=$objUser->extractData();
            
            if (empty($dato_usu['userId'])){
                $objUser->userDate=date('Y-m-d h:i:s');
                $objUser->userStatus="A";
                $con=$objUser->insert();
                $lastId=$objUser->lastIdInserted();
                if($lastId>0){
                    $ip=$_SERVER['REMOTE_ADDR'];
                    $hostName=gethostname();
                    $token=$objSecurity->generateToken();
            
                    $objLogInfo->country=$ip;
                    $country=$objLogInfo->country();

                    $server=$_SERVER['HTTP_USER_AGENT'];
                    $objLogInfo->browser=$server;
                    $browser=$objLogInfo->browser();

                    $objLogInfo->logInfoIp=$ip;
                    $objLogInfo->logInfoCountry=$country;
                    $objLogInfo->logInfoConexion=date('Y-m-d h:i:s');
                    $objLogInfo->logInfoDesconexion=NULL;
                    $objLogInfo->userId=$lastId;
                    $objLogInfo->logInfoToken=$token;
                    $objLogInfo->logInfoBrowser=$browser;
                    $objLogInfo->logInfoHost=$hostName;
                    $objLogInfo->logInfoStatus="A";

                    $con=$objLogInfo->conexion();

                    $objSecurity->serverSession();
                    $_SESSION["userId"]=$lastId;
                    $_SESSION["mailUser"]=$objUser->mailUser;
                    $_SESSION['token']=$token;
                    $_SESSION['ip']=$ip;
                   
                    header("Location: ../../index.php");
                }
            }else{
                $objSecurity->data="register_error";
                $msg=$objSecurity->encrypt();
                $urlMsg="?msg=$msg";
                header("Location: ../../log_in.php".$urlMsg."&sig=neg");
            }

            break;
    
        case 'log_in':
            $objUser->userMail;
            $objUser->userPass;
            $objUser->pointer=$objUser->logIn();
            $user=$objUser->extractData();
        
            if(!empty($user['userStatus']=='A')){

                $objLogInfo->userId=$user['userId'];
                $objLogInfo->pointer=$objLogInfo->currentSession();
                $curSes=$objLogInfo->extractData();

                if(!empty($curSes['total'])>0){
                    $objLogInfo->userId=$user['userId'];
                    $objLogInfo->autoDesconexion();
                }
            
                $ip=$_SERVER['REMOTE_ADDR'];
                $hostName=gethostname();
                $token=$objSecurity->generateToken();
            
                $objLogInfo->country=$ip;
                $country=$objLogInfo->country();

                $server=$_SERVER['HTTP_USER_AGENT'];
                $objLogInfo->browser=$server;
                $browser=$objLogInfo->browser();

                $objLogInfo->logInfoIp=$ip;
                $objLogInfo->logInfoCountry=$country;
                $objLogInfo->logInfoConexion=date('Y-m-d h:i:s');
                $objLogInfo->logInfoDesconexion=NULL;
                $objLogInfo->userId=$user['userId'];
                $objLogInfo->logInfoToken=$token;
                $objLogInfo->logInfoBrowser=$browser;
                $objLogInfo->logInfoHost=$hostName;
                $objLogInfo->logInfoStatus="A";

                $con=$objLogInfo->conexion();

                $objSecurity->serverSession();

                $_SESSION["userId"]=$lastId;
                $_SESSION["mailUser"]=$objUser->mailUser;
                $_SESSION['token']=$token;
                $_SESSION['ip']=$ip;
                   
                header("Location: ../../index.php");
            }else{
                $objSecurity->data="session_error";
                $msg=$objSecurity->encrypt();
                $urlMsg="?msg=$msg";
                header("Location: ../../log_in.php".$urlMsg."&sig=neg");
            }
            break;
    }
}else{
    $objSecurity->data="incorrect_format";
    $msg=$objSecurity->encrypt();
    $urlMsg="?msg=$msg";
    header("Location: ../../log-in.php".$urlMsg."&sig=neg");
}
