<?php

class User {
    protected $userName;
    protected $userEmail;
    protected $address;
    protected $registered;

    function __construct($userName, $userEmail) {
        $this->setUserName($userName);
        $this->setEmail($userEmail);
       
    }

    public function setUserName($value) {
        // controlli
        $this->userName = $value;
      }
      public function getUserName() {
        return $this->userName;
      }

      public function setEmail($value) {
        // controlli
        $this->userEmail = $value;
      }
      public function getEmail() {
        return $this->userEmail;
      }

}
?>