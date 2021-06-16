<?php 

require_once("./classes/user.php");
require_once("./classes/product.php");
require_once("./classes/categoryProduct.php");
require_once("./classes/cards.php");
require_once("./classes/premiumUser.php");

// Istanza user implementata;

try{
    $user = new User("Mario", "mario.rossi@gmail.com", "2019-01-01");
    $c = new Card("0000000000000", "Rossi Mario");
    $user->setPaymentMethod($c);
    var_dump($user);
}catch(Exception $e){
    var_dump($e->getMessage()/*è un metodo di Exception*/);
}


// Classe utente premium ereditata;
$premiumUser = new Premium ("Maria", "maria.rossi@gmail.com","2019-01-01");
//var_dump($premiumUser);

// Categoria prodotti;
$techCategory = new Category ("TECH", "technological devices", true, false);
//var_dump($techCategory );

$phone = new Item("Galaxy S20", "300.00");
$phone->setCategory($techCategory);
var_dump($phone);




?>