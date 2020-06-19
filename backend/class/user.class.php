<?php
require_once("utility.class.php");
class User extends Utility
{
   public $userId;
   public $userDate;
   public $userMail;
   public $userPass;
   public $detailUserId;
   public $userStatus;

   public function insert()
   {
      $this->sql="insert into User (userDate, userMail, userPass, detailUserId, userStatus) values ('$this->userDate', '$this->userMail', '$this->userPass', $this->detailUserId, '$this->userStatus');";
      return $this->run();
   }

   public function update()
   {
      $this->sql="update User set userMail='$this->userMail', userPass='$this->userPass' where userId=$this->userId;";
      return $this->run();
   }

   public function logIn()
   {
      $this->sql="select * from User where userMail='$this->userMail' and userPass='$this->userPass' and userStatus='A';";
      return $this->run();
   }

   public function verifyMail()
   {
      $this->sql="select * from User where userMail='$this->userMail';";
      return $this->run();
   }

   public function changePass()
   {
      $this->sql="update User set userPass='$this->userPass' where userId=$this->userId;";
      return $this->run();
   }
}
?>