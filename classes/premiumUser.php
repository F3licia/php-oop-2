<?php

require_once(__DIR__ . "./user.php");

class Premium extends User {
  public $discount;
  public $registered;

  function __construct($name, $email, $registered) {
    parent::__construct($name, $email, $registered);
    $this->subscrived = true;
    $this->setDiscount($this->registered);
  }

  public function setDiscount($discount) {
    if( date('Y') - date('Y', strtotime($this->registered)) >= 2){
      $this->discount = 50;
   }else{
   $this->discount = 0;} 
  }
  public function getDiscount() {
    return $this->discount;          
  }
}


