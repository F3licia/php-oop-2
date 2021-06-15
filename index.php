<?php 
/*provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti
premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta
di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). */

require_once("./classes/user.php");
require_once("./classes/product.php");
require_once("./classes/categoryProduct.php");
require_once("./classes/cards.php");
require_once("./classes/premiumUser.php");


// Istanza user implementata;
$user = new User("Mario", "mario.rossi@gmail.com");

$c = new Card("0000000000000", "Rossi Mario");
$user->setPaymentMethod($c);
var_dump($user);



// Classe utente premium ereditata;
$premiumUser = new Premium ("Maria", "maria.rossi@gmail.com");
var_dump($premiumUser);

// Categoria prodotti;
$techCategory = new Category ("TECH", "technological devices", true, false);
var_dump($techCategory );

$phone = new Item("Galaxy S20", "300.00");
$phone->setCategory($techCategory);
var_dump($phone);



?>