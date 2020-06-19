<?php
require_once("utility.class.php");
class Category extends Utility
{
    public $categoryId;
    public $categoryName;
    public $colorId;
    public $userId;
    public $categoryStatus;

    public function insert()
    {
        $this->sql="insert into Category (categoryName, colorId, userId, categoryStatus) values ('$this->categoryName', $this->colorId, $this->userId, '$this->categoryStatus');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update Category set categoryName='$this->categoryName', colorId=$this->colorId, userId=$this->userId, categoryStatus='$this->categoryStatus' where categoryId=$this->categoryId;";
        return $this->run();       
    }

    public function delete()
    {
        $this->sql="delete from Category where categoryId=$this->categoryId;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->categoryStatus!="") ? "and categoryStatus='$this->categoryStatus'" : "" ;
        $this->sql="select * from Category where 1=1 $filter1;";
        return $this->run();
    }
}
?>