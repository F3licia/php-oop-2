<?php

class Cart {
  private $userName;
  private $products = [];
  private $paymentMethod;

  function __construct($userName) {
    $this->userName = $userName;
  }

  public function addProduct($product){
    $this->products[] = $product;
  }

  public function setPaymentMethod($value) {
    $this->paymentMethod = $value;
  }
  public function getPaymentMethod() {
    return $this-> paymentMethod;
  }
}