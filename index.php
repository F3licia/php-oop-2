<?php 

require_once("./classes/user.php");
require_once("./classes/product.php");
require_once("./classes/cards.php");
require_once("./classes/cart.php");

try{
$newUser = new User("Mario","mario.rossi@gmail.com", "");
$newCart = new Cart ($newUser->userName);

$GalaxyS20 = new Item("Galaxy S20", "300.00");
  //$GalaxyS20->setCategory($techCategory);
  $newCart->addProduct($GalaxyS20);

  $c = new Card("0000000000000", "Rossi Mario");
  $newCart->setPaymentMethod($c);
  $newUser->memorizeMethod($c);

  var_dump($newUser);
//$premiumUser = new Premium ($newUser->userName, $newUser->userEmail, $newUser->registeredOn); //!!!la funzione non prende la data immagazzinata


}catch(Exception $e){
    var_dump($e->getMessage());

}





/*-----------------------------------*/
// Istanza user implementata;

try{
    $user = new User("Mario", "mario.rossi@gmail.com", "2019-01-01");
    $c = new Card("0000000000000", "Rossi Mario");
    $user->memorizeMethod($c);
   // var_dump($user);
}catch(Exception $e){
    //var_dump($e->getMessage()/*è un metodo di Exception*/);
}


// Classe utente premium ereditata;
$premiumUser = new Premium ("Maria", "maria.rossi@gmail.com","");
//var_dump($premiumUser);

// Categoria prodotti;
try{
    $techCategory = new Category ("TECH", "technological devices", true, false);
    //var_dump($techCategory);


    // Creazione prodotto;
    $phone = new Item("Galaxy S20", "300.00");
    $phone->setCategory($techCategory);
    //var_dump($phone);
}catch(Exception $e){
    //var_dump($e->getMessage()/*è un metodo di Exception*/);
}

?>