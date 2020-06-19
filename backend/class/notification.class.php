<?php 
require_once("utility.class.php");
class Notification extends Utility
{
    public $idNotification;
    public $dateNotification;
    public $timeNotification;
    public $fkyTask;
    public $statusNotification;

    public function insert()
    {
        $this->sql="inset into Notification (dateNotification, timeNotification, fkyTask, statusNotification) values ('$this->dateNotification', '$this->timeNotification', $this->fkyTask, '$this->statusNotification');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update Notification set dateNotification='$this->dateNotification', timeNotification='$this->timeNotification', fkyTask=$this->fkyTask, statusNotification='$this->statusNotification' where idNotification=$this->idNotification;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from Notification where idNotification=$this->idNotification;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->statusNotification!="") ? "and statusNotification='$this->statusNotification'" : "" ;
        $this->sql="select * from Notification where 1=1 $filter1;";
        return $this->run();
    }
}
?>