<?php

class ProduitVirtuel extends Produit{
  private $fichier;
  
  public function calculerPrixFinal(){
    return $this->prix;
  }
}