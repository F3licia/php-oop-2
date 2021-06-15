<?php

class Item {
    public $code;
    public $title;
    public $category;
    public $pieces;
    public $price;
    public $currency = "euro";

    function __construct($title, $price, $currency) {
        $this->setItemTitle($title);
        $this->setPriceItem($price);
       
    }

    public function setItemTitle($value) {
        // controlli
        $this->title = $value;
      }
      public function getItem() {
        return $this->title;
      }

      public function setPriceItem($value) {
        // controlli
        $this->price = $value;
      }
      public function getPrice() {
        return $this->price;
      }

}
?>