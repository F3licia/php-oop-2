<?php

class Cart {
  private $userName;
  private $products = [];
  private $paymentMethod;
  private $address;

  function __construct($userName) {
    $this->userName = $userName;
  }

  public function addProduct($product){
    if(!is_object($product)){
      throw new Exception("Si è verificato un errore");
    }
    $this->products[] = $product;
  }

  public function setPaymentMethod($value) {
    $this->paymentMethod = $value;
  }
  public function getPaymentMethod() {
    return $this-> paymentMethod;
  }
}