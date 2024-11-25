<?php

// Import de la class Produit
require_once './trait/LoggerTrait.php';
require_once './class/Produit.php';
require_once './class/ProduitPhysique.php';
 
// Création d'un objet 'livre' de type 'Produit'
$livre = new Produit('Nom du livre', null, 100, 10);
 
// // Ajout de données dans l'objet (appel des setters)
// $livre->setNom('Nom du livre')
//   ->setQuantite(100)
//   ->setPrix(10);

// Affichage de l'objet
echo $livre;

$livre2 = new Produit('Livre 2', 'Description livre 2', 10, 20);

// Affichage de l'objet
echo $livre2;

$chaise = new ProduitPhysique(
  'Nom de la chaise',
  null,
  100,
  20,
  5
);

echo $chaise;