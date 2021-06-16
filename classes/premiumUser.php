<?php

require_once(__DIR__ . "./user.php");

class Premium extends User {
  public $discount;
  public $registeredOn;

  function __construct($userName, $userEmail, $registeredOn) {
    parent::__construct($userName, $userEmail, $registeredOn);
    $this->premiumSubscrived = true;
    $this->setDiscount($this->registeredOn);
  }

  public function setDiscount() {
    $val = date('Y') - date('Y', strtotime($this->registeredOn));
      $this->discount = $val*10;


    }
  
  public function getDiscount() {
    return $this->discount;          
  }
}


