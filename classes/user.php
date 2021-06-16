<?php
require_once(__DIR__ . "./cards.php");
require_once(__DIR__ . "./premiumUser.php");
require_once(__DIR__ . "/../errors/invalidMail.php");


class User {
    public $userName;
    public $userEmail;
    public $address;
    public $registeredOn;
    public $memorizeMethod = [];
    public $premiumSubscrived = false; //defoult utenti regular

    function __construct($userName, $userEmail, $registeredOn) {
        $this->setUserName($userName);
        $this->setEmail($userEmail);
        $this->setRegistrationDate($registeredOn);
    }

    public function setUserName($value) {
        if(is_numeric($value)){
          throw new Exception("Si è verificato un errore");
        }
      $this->userName = $value;
    }
    public function getUserName() {
      return $this->userName;
    }

    public function setEmail($value) {
        if(!strstr($value, "@")){
          throw new InvalidEmail();
        }
      $this->userEmail = $value;
    }
    public function getEmail() {
      return $this->userEmail;
    }

    public function setRegistrationDate() {
      $this->registeredOn = date("D/M/Y");
    }
    public function getRegistrationDate() {
      return $this-> registeredOn;
    }

    public function memorizeMethod($value){
      $this->cards[] = $value;
    }
   
    

}



?>