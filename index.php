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
require_once("./classes/merch.php");
require_once("./classes/payments.php");

$user = new User("Mario", "mario.rossi@gmail.com");
var_dump($user);

$item = new Item("phone", "100", "");
var_dump($item);

$paymentMode= new Payment("credit card", [$user]);
var_dump($paymentMode);
?>