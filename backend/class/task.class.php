<?php

require_once("utility.class.php");
class task extends utility
{
    public $id_task;
    public $nam_task;
    public $des_task;
    public $dat_task;
    public $tim_task;
    public $fky_category;
    public $fky_color;
    public $fky_user;
    public $sta_imp_task;
    public $sta_task;

    public function insert()
    {
        $this->sql="inser into task (nam_task, des_task, dat_task, tim_task, fky_category, fky_color, fky_user,sta_imp_task, sta_task) values ('$this->nam_task', '$this->des_task', '$this->dat_task', '$this->tim_task', $this->fky_category, $this->fky_color, $this->fky_user, '$this->sta_imp_task', '$this->sta_task');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update task set nam_task='$this->nam_task', des_task='$this->des_task', dat_task='$this->dat_task', tim_task='$this->tim_task', fky_category=$this->fky_category, fky_color=$this->fky_color, fky_user=$this->fky_user, sta_imp_task='$this->sta_imp_task', sta_task='$this->sta_task' where id_task=$this->id_task;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from task where id_task=$this->id_task;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->sta_task="") ? "and sta_task='$this->sta_task'" : "" ;
        $this->sql="select * from task where 1=1 $filter1;";
        return $this->run();
    }

    public function filter()
    {
        $filter1 = ($this->id_task!="") ? "and id_task=$this->id_task" : "" ;
        $filter2 = ($this->nam_task!="") ? "and nam_task='$this->nam_task'" : "" ;
        $filter3 = ($this->des_task!="") ? "and des_task='$this->des_task'" : "" ;
        $filter4 = ($this->dat_task!="") ? "and dat_task='$this->dat_task'" : "" ;
        $filter5 = ($this->tim_task!="") ? "and tim_task='$this->tim_task'" : "" ;
        $filter6 = ($this->fky_category!="") ? "and fky_category=$this->fky_category" : "" ;
        $filter7 = ($this->fky_color!="") ? "and fky_color=$this->fky_color" : "" ;       
        $filter8 = ($this->fky_user!="") ? "and fky_user=$this->fky_user" : "" ;
        $filter9 = ($this->sta_imp_task!="") ? "and sta_imp_task='$this->sta_imp_task'" : "" ;
        $filter10 = ($this->sta_task!="") ? "and sta_task='$this->sta_task'" : "" ;

        $this->sql="slect t.*, ca.*, co.*, u,* from task t, category ca, color co, user u where 1=1 and t.fky_category=ca.id_cat and t.fky_color=co.id_col and t.fky_user=u.id_use $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10;";
        return $this->run();
    }
}
?>