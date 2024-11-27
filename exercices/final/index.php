<?php

require_once './trait/HistoriquePrix.php';
require_once './interface/Promotion.php';
require_once './class/Produit.php';
require_once './class/ProduitPhysique.php';
require_once './class/ProduitVirtuel.php';
require_once './class/ReductionFixe.php';
require_once './class/ReductionPourcentage.php';

$produit = new ProduitPhysique();
$produit->setPrix(50);

echo '<p>'. $produit->calculerPrixFinal().'€</p>';

$reduction = new ReductionFixe();
$nouveau_prix = $reduction->appliquerPromotion($produit);

$produit->setPrix($nouveau_prix);

echo '<p>'. $produit->calculerPrixFinal().'€</p>';

echo '<p>'. $produit->afficherHistorique().'€</p>';