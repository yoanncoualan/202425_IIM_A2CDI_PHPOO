<?php

class ReductionPourcentage implements Promotion{
  const REDUCTION = 0.8;

  public function appliquerPromotion(Produit $produit): float|int
  {
    return $produit->getPrix() * self::REDUCTION;
  }
}