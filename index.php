<?php 

require_once("./classes/user.php");
require_once("./classes/product.php");
require_once("./classes/cards.php");
require_once("./classes/cart.php");

$techCategory = new Category("tech", "technology devices", true, false);         //creazione di una categoria
$GalaxyS20 = new Item("Galaxy S20", "300.00");                                   //creazione di un prodotto per la categoria
  $GalaxyS20->setCategory($techCategory); 
  var_dump($GalaxyS20);

try{
$newUser = new User("Mario","mario.rossi@gmail.com", "2021/06/16");          //registrazione dell'utente

$newCart = new Cart ($newUser->userName);                                   //creazione carrello

  $newCart->addProduct($GalaxyS20);                            //il prodotto è messo nel carrello dell'utente

  $c = new Card("0000000000000", "Rossi Mario");                 //creazione carta utente
  $newCart->setPaymentMethod($c);                               //registrata come metodo di pagamento del carrello
  $newUser->memorizeMethod($c);                                  //memorizzata tra i metodi di pagamento dell'utente


$premiumUser = new Premium ($newUser->userName, $newUser->userEmail, $newUser->registeredOn);     //aggiunti dati utente a scheda premium
  var_dump($newCart);

}catch(Exception $e){
    var_dump($e->getMessage());

}


/*-----------------------------------*/

// verifica funzione setDiscount
$SecondPremiumUser = new Premium ("Maria", "maria.rossi@gmail.com", "2019/01/01");

?>