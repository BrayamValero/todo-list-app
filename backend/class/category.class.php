<?php
require_once("utility.class.php");
class category extends utility
{
    public $id_cat;
    public $nam_cat;
    public $fky_color;
    public $sta_cat;

    public function insert()
    {
        $this->sql="insert into category (nam_cat, fky_color, sta_cat) values ('$this->nam_cat', $this->fky_color, '$this->sta_cat');";
        return $this->run();
    }

    public function update()
    {
        $this->sql="update category set nam_cat='$this->nam_cat', fky_color='$this->fky_color', sta_cat='$this->sta_cat' where id_cat=$this->id_cat;";
        return $this->run();       
    }

    public function delete()
    {
        $this->sql="delete from category where id_cat=$this->id_cat;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->sta_cat!="") ? "and sta_cat='$this->sta_cat'" : "" ;
        $this->sql="select * from category where 1=1 $filter1;";
        return $this->run();
    }
}
?>