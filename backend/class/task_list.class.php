<?php
require_once("utility.class.php");
class task_list extends utility
{
    public $id_task_list;
    public $nam_task_list;
    public $fky_task;
    public $sta_task_list;

    public function insert()
    {
        $this->sql="insert into task_list (nam_task_list, fky_task, sta_task_list) values ('$this->nam_task_list', $this->fky_task, '$this->sta_task_list');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update task_list set nam_task_list='$this->nam_task_list', fky_task='$this->fky_task', sta_task_list='$this->sta_task_list' where id_task_list=$this->id_task_list;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from task_list where id_task_list=$this->id_task_list;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->sta_task_list!="") ? "and sta_task_list='$this->sta_task_list'" : "" ;
        $this->sql="select * from task_list where 1=1 $filter1;";
        return $this->run();
    }
}
?>