<?php

require_once './class/CompteBancaire.php';

// Ouverture d'un nouveau compte bancaire
$compte = new CompteBancaire('Yoann');
$compte->crediter(1000);

echo '<p>'. $compte->getSolde() .'€</p>';

if($compte->debiter(2000) == true){
  echo '<p>'. $compte->getSolde() .'€</p>';
}
else{
  echo '<p>Solde insuffisant</p>';
}