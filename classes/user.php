<?php
require_once(__DIR__ . "./cards.php");
require_once(__DIR__ . "/../errors/invalidMail.php");
class User {
    public $userName;
    public $userEmail;
    public $address;
    public $registered;
    public $paymentMethod;
    public $premiumSubscrived = false; //defoult utenti regular

    function __construct($userName, $userEmail, $registered) {
        $this->setUserName($userName);
        $this->setEmail($userEmail);
        $this->setRegistrationDate($registered);
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
      
    public function setPaymentMethod($value) {
      $this->paymentMethod = $value;
    }
    public function getPaymentMethod() {
      return $this-> paymentMethod;
    }

    public function setRegistrationDate() {
      $this->registered = date("D/M/Y");
    }
    public function getRegistrationDate() {
      return $this-> registered;
    }
   
    

}



?>