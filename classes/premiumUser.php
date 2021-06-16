<?php

require_once(__DIR__ . "./user.php");

class Premium extends User {
  public $discount;
  public $registered;

  function __construct($name, $email, $registered) {
    parent::__construct($name, $email, $registered);
    $this->premiumSubscrived = true;
    $this->setDiscount($this->registered);
  }

  public function setDiscount($discount) {
    $val = date('Y') - date('Y', strtotime($this->registered));
      $this->discount = $val*10;
    }
  
  public function getDiscount() {
    return $this->discount;          
  }
}


