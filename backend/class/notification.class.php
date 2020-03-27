<?php 
require_once("utility.class.php");
class notification extends utility
{
    public $id_not;
    public $dat_not;
    public $tim_not;
    public $fky_task;
    public $sta_not;

    public function insert()
    {
        $this->sql="inset into notification (dat_not, tim_not, fky_task, sta_not) values ('$this->dat_not', '$this->tim_not', $this->fky_task, '$this->sta_not');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update notification set dat_not='$this->dat_not', tim_not='$this->tim_not', fky_task=$this->fky_task, sta_not='$this->sta_not' where id_not=$this->id_not;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from notification where id_not=$this->id_not;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->sta_not!="") ? "and sta_not='$this->sta_not'" : "" ;
        $this->sql="select * from notifacition where 1=1 $filter1;";
        return $this->run();
    }
}
?>