<?php

// Import de la class Produit
require_once './class/Produit.php';
 
// Création d'un objet 'livre' de type 'Produit'
$livre = new Produit('Nom du livre', null, 100, 10);
 
// // Ajout de données dans l'objet (appel des setters)
// $livre->setNom('Nom du livre')
//   ->setQuantite(100)
//   ->setPrix(10);

// Affichage de l'objet
echo '<h1>'. $livre->getNom() .'</h1>';
echo '<p>'. $livre->getQuantite() .' produits en stock</p>';
echo '<p>'. $livre->getPrix() .'€ HT '. $livre->getPrixTTC() .'€ TTC</p>';

$livre2 = new Produit('Livre 2', 'Description livre 2', 10, 20);

// Affichage de l'objet
echo '<h1>'. $livre2->getNom() .'</h1>';
echo '<p>'. $livre2->getDescription() .'</p>';
echo '<p>'. $livre2->getQuantite() .' produits en stock</p>';
echo '<p>'. $livre2->getPrix() .'€ HT '. $livre2->getPrixTTC() .'€ TTC</p>';