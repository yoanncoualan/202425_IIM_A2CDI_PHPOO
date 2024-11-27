<?php

abstract class Produit{
  use HistoriquePrix;

  protected string $nom;
  protected float $prix;

  abstract public function calculerPrixFinal();

  public function setPrix(float $prix): self
  {
    $this->prix = $prix;
    $this->ajouterHistorique($prix);
    return $this;
  }

  public function getPrix(): float
  {
    return $this->prix;
  }
}