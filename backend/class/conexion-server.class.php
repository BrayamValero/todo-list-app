<?php

class Conexion
{
    private $host;
    private $user;
    private $pass;
    private $dateBase;

    public $mysqli;
    public $sql;
    public $pointer;

    public function __construct(){
        $this->host="127.0.0.1";
        $this->user="root";
        $this->pass="";
        $this->dateBase="todo_list_app";
        $this->connect();
        ini_set("date.timezone", "America/Caracas");
    }

    private function connect()
    {
        $this->mysqli= new mysqli($this->host, $this->user, $this->pass, $this->dateBase);
    }

    public function run()
    {
        echo $this->sql;
        return $this->mysqli->query($this->sql);
    }

    public function assignValue()
    {
        foreach ($_REQUEST as $name => $value) {
            $this->$name=$value;
        }
    }

    public function extractData()
    {
        return $this->pointer->fetch_assoc();
    }
    
    public function lastIdInserted()
    {
		return mysqli_insert_id($this->mysqli);
    } 
}
