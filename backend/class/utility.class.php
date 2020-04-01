<?php 

class utility{

    private $host;
    private $user;
    private $pass;
    private $date_base;

    public $mysqli;
    public $sql;
    public $pointer;
    public $result;
    public $message;

    public function __construct(){
        $this->host="127.0.0.1";
        $this->user="root";
        $this->pass="";
        $this->date_base="todo_list_app";
        $this->connect();
        ini_set("date.timezone", "America/Caracas");
    }

    public function connect()
    {
        $this->mysqli= new mysqli($this->host, $this->user, $this->pass, $this->date_base);
    }

    public function run()
    {
        echo $this->sql;
        return $this->mysqli->query($this->sql);
    }

    public function assign_value()
    {
        foreach ($_REQUEST as $field_name => $value) {
            $this->$field_name=$value;
        }
    }

    public function extract_data()
    {
        return $this->pointer->fetch_assoc();
    }

    public function message()
    {
        if($this->result==true){
            echo "$this->message";
        }else
            echo "It's not working"; 
        
    }

    public function last_id_inserted()
	{
		return mysqli_insert_id($this->mysqli);
	} 

}
?>