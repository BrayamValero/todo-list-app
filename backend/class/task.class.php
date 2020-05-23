<?php

require_once("utility.class.php");
class Task extends Utility
{
    public $taskId;
    public $taskName;
    public $taskDecription;
    public $taskDate;
    public $taskTime;
    public $categoryId;
    public $colorId;
    public $userId;
    public $taskStatusImportance;
    public $taskStatus;

    public function insert()
    {
        $this->sql="insert into Task (taskName, taskDecription, taskDate, taskTime, categoryId, colorId, userId,taskStatusImportance, taskStatus) values ('$this->taskName', '$this->taskDecription', '$this->taskDate', '$this->taskTime', $this->categoryId, $this->colorId, $this->userId, '$this->taskStatusImportance', '$this->taskStatus');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update Task set taskName='$this->taskName', taskDecription='$this->taskDecription', taskDate='$this->taskDate', taskTime='$this->taskTime', categoryId=$this->categoryId, colorId=$this->colorId, userId=$this->userId, taskStatusImportance='$this->taskStatusImportance', taskStatus='$this->taskStatus' where taskId=$this->taskId;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from Task where taskId=$this->taskId;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->taskStatus="") ? "and taskStatus='$this->taskStatus'" : "" ;
        $this->sql="select * from Task where 1=1 $filter1;";
        return $this->run();
    }

    public function filter()
    {
        $filter1 = ($this->taskId!="") ? "and taskId=$this->taskId" : "" ;
        $filter2 = ($this->taskName!="") ? "and taskName='$this->taskName'" : "" ;
        $filter3 = ($this->taskDecription!="") ? "and taskDecription='$this->taskDecription'" : "" ;
        $filter4 = ($this->taskDate!="") ? "and taskDate='$this->taskDate'" : "" ;
        $filter5 = ($this->taskTime!="") ? "and taskTime='$this->taskTime'" : "" ;
        $filter6 = ($this->categoryId!="") ? "and categoryId=$this->categoryId" : "" ;
        $filter7 = ($this->colorId!="") ? "and colorId=$this->colorId" : "" ;       
        $filter8 = ($this->userId!="") ? "and userId=$this->userId" : "" ;
        $filter9 = ($this->taskStatusImportance!="") ? "and taskStatusImportance='$this->taskStatusImportance'" : "" ;
        $filter10 = ($this->taskStatus!="") ? "and taskStatus='$this->taskStatus'" : "" ;

        $this->sql="slect t.*, ca.*, co.*, u,* from Task t, category ca, color co, user u where 1=1 and t.categoryId=ca.id_cat and t.colorId=co.id_col and t.userId=u.id_use $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10;";
        return $this->run();
    }
}
?>