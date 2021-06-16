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
      if(!is_numeric($value)){
        throw new Exception("Numero di carta non valido");
      }
      $this->code = $value;
    }
    public function getCode() {
      return $this->code;
    }


    public function setAccaHol($value) {
      $this->accountholder = $value;
      if(is_numeric($value)){
        throw new Exception("Si è verificato un errore");
      }
    }
    public function getAccaHol() {
      return $this->accountholder;
    }
}




