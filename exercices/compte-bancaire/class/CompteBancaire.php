<?php

class CompteBancaire{
  private $titulaire;
  private $solde;

  const DECOUVERT = -1000;

  public function __construct(string $titulaire)
  {
    $this->setTitulaire($titulaire);
  }
  public function setTitulaire(string $nom): self
  {
    $this->titulaire = $nom;
    return $this;
  }
  public function getTitulaire(): string
  {
    return $this->titulaire;
  }

  public function crediter(float $value): self
  {
    $this->solde += $value;
    return $this;
  }

  public function debiter(float $value): bool
  {
    $nouveau_solde = $this->getSolde() - $value;
    if($nouveau_solde < self::DECOUVERT){
      return false;
    }
    else{
      $this->solde = $nouveau_solde;
      return true;
    }
  }

  public function getSolde(): float
  {
    return $this->solde;
  }
}