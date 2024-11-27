<?php

class ReductionFixe implements Promotion{
  const REDUCTION = 10;

  public function appliquerPromotion(Produit $produit): float|int
  {
    $nouveau_prix = $produit->getPrix() - self::REDUCTION;
    if($nouveau_prix < 0){
      return 0;
    }
    return $nouveau_prix;
  }
}