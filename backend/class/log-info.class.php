<?php
require_once("utility.class.php");
class LogInfo extends Utility
{
    public $logInfoId;
    public $logInfoIp;
    public $logInfoCountry;
    public $logInfoConexion;
    public $logInfoDesconexion;
    public $userId;
    public $logInfoToken;
    public $logInfoBrowser;
    public $logInfoHost;
    public $logInfoStatus;

    public function conexion()
    {
        $this->sql="insert into LogInfo 
                        (logInfoId,
                        logInfoIp,
                        logInfoCountry,
                        logInfoConexion,
                        logInfoDesconexion,
                        userId,
                        logInfoToken,
                        logInfoBrowser,
                        logInfoHost,
                        logInfoStatus)
                    values
                        ('$this->logInfoId',
                        '$this->logInfoIp',
                        '$this->logInfoCountry',
                        '$this->logInfoConexion',
                        '$this->logInfoDesconexion',
                        $this->userId,
                        '$this->logInfoToken',
                        '$this->logInfoBrowser',
                        '$this->logInfoHost',
                        '$this->logInfoStatus');";
        return $this->run();
    }

    public function desconexion()
    {
      $this->sql="update LogInfo set logInfoStatus='I', logInfoDesconexion'".date('Y-m-d h:i:s')."' where logInfoToken='$this->logInfoToken'";
      return $this->run();
    }

    public function activeSessions() //esta funcion se encarga contar las sesiones del usuario
    {
      $this->sql="select count(logInfoIp) as total from LogInfo where logInfoIp!='$this->logInfoIp' and userId=$this->userId";
      return $this->run();
    }

    public function currentSession() //funcion que se encarga de revisar si el usuario tiene alguna sesion activa
    {
      $this->sql="select count(*) as total from LogInfo where userId=$this->userId and logInfoStatus='A';";
      return $this->run();
    }

    public function autoDesconexion() //funcion que se encarga de desactivar alguna sesion activa
    {
      $this->sql="update LogInfo set logInfoStatus='I' where userId=$this->userId and logInfoStatus='A'";
      return $this->run();
    }

    public function token()
    {
        $currentIp=$_SERVER['REMOTE_ADDR'];
        $this->sql="select * from LogInfo where userId=$this->userId and logInfoStatus='A' and logInfoIp='$currentIp'";
        return $this->run();
    }
}
?>