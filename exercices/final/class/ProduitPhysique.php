<?php

class ProduitPhysique extends Produit{
  private float $poids;
  const LIVRAISON = 5;

  public function calculerPrixFinal(): float|int
  {
    return $this->prix + self::LIVRAISON;
  }
}