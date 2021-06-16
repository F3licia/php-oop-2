<?php
require_once(__DIR__ . "/../classes/user.php"); //è collegato all'user non all'index

class InvalidEmail extends Exception {

  private $defaultMessage = "La mail inserita non è valida";

  function __construct($message = "") {
    if(empty($message)){
      $message = $this->defaultMessage;
    }
    parent::__construct($message);
  }
}
