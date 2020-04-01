<?php
require_once("utility.class.php");
class  color extends utility
{
    public $id_col;
    public $nam_col;
    public $cod_col;
    public $fky_user;
    public $sta_col;
    
    public function insert()
    {
        $this->sql="insert into color (nam_col, cod_col, fky_user, sta_col) values ('$this->nam_col','$this->cod_col', $this->fky_user, '$this->sta_col');";
        return $this->run();   
    }

    public function update()
    {
        $this->sql="update color set nam_col='$this->nam_col' cod_col='$this->cod_col', fky_user=$this->fky_user, sta_col='$this->sta_col' where id_col=$this->id_col;";
        return $this->run();
    }

    public function delete()
    {
        $this->sql="delete from color where id_col=$this->id_col;";
        return $this->run();
    }

    public function list()
    {
        $filter1 = ($this->sta_col!="") ? "and sta_col='$this->sta_col'" : "" ;
        $this->sql="select * from color where 1=1 $filter1;";
        return $this->run();
    }
}
?>