<?php

require_once(__DIR__ . "./user.php");

class Premium extends User {
  public $discount;

  function __construct($name, $email) {
    parent::__construct($name, $email);
    $this->subscrived = true;
   /* $this->setDiscount($this->discount);
  }

  public function setDiscount($registered) {
    if(date("Y") - $registered >= 2){
      $this->discount = 20;
    }else{
      $this->discount = 0;
    }
  }
  public function getDiscount() {
    return $this->discount;              ????*/
  }

}


