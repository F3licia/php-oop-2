<?php

require_once(__DIR__ . "./user.php");

class Card{
  private $code;
  private $accountholder;

  function __construct($code, $accountholder) {
    $this->setCode($code);
    $this->setAccaHol($accountholder);
   
  }

    public function setCode($value) {
      $this->code = $value;
    }
    public function getCode() {
      return $this->code;
    }


    public function setAccaHol($value) {
      $this->accountholder = $value;
    }
    public function getAccaHol() {
      return $this->accountholder;
    }
}




