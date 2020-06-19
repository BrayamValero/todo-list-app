<?php
require_once("utility.class.php");
class  Color extends Utility
{
    public $colorId;
    public $colorName;
    public $colorCode;
    public $userId;
    public $colorStatus;
    
    public function insert()
    {
        $this->sql="insert into Color (colorName, colorCode, userId, colorStatus) values ('$this->colorName','$this->colorCode', $this->userId, '$this->colorStatus');";
        return $this->run();   
    }

    public function update()
    {
        $this->sql="update Color set colorName='$this->colorName' colorCode='$this->colorCode', userId=$this->userId, colorStatus='$this->colorStatus' where colorId=$this->colorId;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from Color where colorId=$this->colorId;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->colorStatus!="") ? "and colorStatus='$this->colorStatus'" : "" ;
        $this->sql="select * from Color where 1=1 $filter1;";
        return $this->run();
    }
}
?>