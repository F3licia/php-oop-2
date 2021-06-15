<?php
require_once(__DIR__ . "./cards.php");
class User {
    public $userName;
    public $userEmail;
    public $address;
    public $registered = 2018;
    public $paymentMethod;
    public $subscrived = false;

    function __construct($userName, $userEmail) {
        $this->setUserName($userName);
        $this->setEmail($userEmail);
       
    }

    public function setUserName($value) {
        // controlli
        $this->userName = $value;
    }
    public function getUserName() {
      return $this->userName;
    }

    public function setEmail($value) {
      // controlli
      $this->userEmail = $value;
    }
    public function getEmail() {
      return $this->userEmail;
    }
      
    public function setPaymentMethod($value) {
      // controlli
      $this->paymentMethod = $value;
    }
    public function getPaymentMethod() {
      return $this-> paymentMethod;
    }

    //default utenti ordinarii
    public function setSubscription($value) {
      $this->subscrived = false;
    }
    

}



?>