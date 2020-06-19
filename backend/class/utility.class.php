<?php 
require_once("conexion-server.class.php");
class Utility extends Conexion
{
    public $result;
    public $message;
    public $country;
    public $browser;

    public function message()
    {
        if($this->result==true){
            echo "$this->message";
        }else
            echo "It's not working"; 
    }	
    
    public function browser()
    {
        if(strpos($this->browser, 'MSIE') !== FALSE)
            return 'Internet explorer';
        elseif(strpos($this->browser, 'Edge') !== FALSE) //Microsoft Edge
            return 'Microsoft Edge';
        elseif(strpos($this->browser, 'Trident') !== FALSE) //IE 11
            return 'Internet explorer';
        elseif(strpos($this->browser, 'Opera Mini') !== FALSE)
            return "Opera Mini";
        elseif(strpos($this->browser, 'Opera') || strpos($this->browser, 'OPR') !== FALSE)
            return "Opera";
         elseif(strpos($this->browser, 'Firefox') !== FALSE)
            return 'Mozilla Firefox';
        elseif(strpos($this->browser, 'Chrome') !== FALSE)
            return 'Google Chrome';
        elseif(strpos($this->browser, 'Safari') !== FALSE)
            return "Safari";
        else
            return "No Definido";         
    }

    public function country()
    {
        $dataArray = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$this->country));
   
        if($dataArray=="")
        {
            $dataArray->geoplugin_countryName="unknown";
        }
        return $dataArray->geoplugin_countryName;
    }

}
?>