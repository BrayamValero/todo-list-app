<?php
require_once("utility.class.php");
class TaskList extends Utility
{
    public $taskListId;
    public $taskListName;
    public $taskId;
    public $taskListStatus;

    public function insert()
    {
        $this->sql="insert into TaskList (taskListName, taskId, taskListStatus) values ('$this->taskListName', $this->taskId, '$this->taskListStatus');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update TaskList set taskListName='$this->taskListName', taskId='$this->taskId', taskListStatus='$this->taskListStatus' where taskListId=$this->taskListId;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from TaskList where taskListId=$this->taskListId;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->taskListStatus!="") ? "and taskListStatus='$this->taskListStatus'" : "" ;
        $this->sql="select * from TaskList where 1=1 $filter1;";
        return $this->run();
    }
}
?>