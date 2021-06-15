<?php
require_once(__DIR__ . "./categoryProduct.php");

class Item {
    public $id;
    public $title;
    public $pieces;
    public $price;
    public $category;

    function __construct($title, $price) {
      $this->setItemTitle($title);
      $this->setPriceItem($price);
       
    }

    public function setItemTitle($value) {
        $this->title = $value;
      }
      public function getItem() {
        return $this->title;
      }

      public function setPriceItem($value) {
        $this->price = $value;
      }
      public function getPrice() {
        return $this->price;
      }

      public function setCategory($value) {
        // controlli
        $this->category = $value;
      }
      public function getCategory() {
        return $this-> category;
      }

}
?>