<?php

require_once(__DIR__ . "./user.php");

class Payment extends User {
  private $paymentMode;

  function __construct($paymentMode) {

    $this->paymentMode = $paymentMode;
  }
  public function setPaymentMode($value) {
    $this->paymentMode = $value;
  }
  public function getPaymentMode() {
    return $this->paymentMode;
  }

}
