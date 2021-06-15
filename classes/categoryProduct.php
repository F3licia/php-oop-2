<?php

class Category {
  public $code;
  public $categoryName;
  public $expiry_date;
  public $warranty;

  function __construct($code, $categoryName, $warranty, $expiry_date) {
      $this->setCode($code);
      $this->setCategoryName($categoryName);
      $this->setWarranty($warranty);
      $this->setExpiryDate($expiry_date);
  }
  public function setCode($value) {
    $this->code = $value;
  }
  public function getCode() {
    return $this->code;
  }

  public function setCategoryName($value) {
    $this->categoryName = $value;
  }
  public function getCategoryName() {
    return $this->categoryName;
  }

  public function setWarranty($value) {
    $this->warranty = $value;
  }
  public function getWarranty() {
    return $this->warranty;
  }

  public function setExpiryDate($value) {
    $this->expiry_date = $value;
  }
  public function getExpiryDate() {
    return $this->expiry_date;
  }

}


