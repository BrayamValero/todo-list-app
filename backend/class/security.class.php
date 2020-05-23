<?php 
require_once("utility.class.php");
class Security{

    public $csrfToken;
    public $data;
    public $masterPass="d4b80653e42998fdec42cc5c31a70f74"; //md5("brayam lo chupa")

    public function serverSession()
    {
        $status=session_status();
        if(!isset($_SESSION) || ($status!=2)){ 
            session_start(); 
        }
    }

    public function generateToken()
    {
        $token=md5(bin2hex(random_bytes(64)));
        return $token;
    }

    public function generateCsrf()
    {
        $csrfToken=hash('md5', uniqid());
        $_SESSION['csrfToken']=$csrfToken;
        return $csrfToken;
    }

    public function checkCsrf()
    {
        if (!empty($_SESSION['csrfToken']) && hash_equals($this->csrfToken, $_SESSION['csrfToken']))
        {
            unset($_SESSION['csrfToken']);  
            return true;
        }
        return false;
    }

    public function csrf()
    {
        echo "<input type='hidden' name='csrfToken' value='$this->csrfToken'>";
    }

    public function encrypt()
    {
        $string=bin2hex(random_bytes(8));
        $encrypt=openssl_encrypt($this->data, "aes-256-cbc", $this->masterPass, false, $string);
        return base64_encode($encrypt."::".$string);
    }

    public function decrypt()
    { 
        list($encryptData, $string)=explode('::', base64_decode($this->data), 2);
        $variable=openssl_decrypt($encryptData, 'aes-256-cbc', $this->masterPass, false, $string);
        return $variable;
    }
}
?>