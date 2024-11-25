<?php

class ProduitPhysique extends Produit{
  use LoggerTrait;

  private $poids;

  public function __construct(
    string $nom,
    ?string $description,
    int $quantite,
    float $prix,
    float $poids
  ){
    $this->log(__CLASS__, 'Nouvelle instance');
    parent::__construct($nom, $description, $quantite, $prix);
    $this->setPoids($poids);
  }

  public function setPoids(float $value): self
  {
    $this->poids = $value;
    return $this;
  }
  public function getPoids(): float
  {
    return $this->poids;
  }

  public function __tostring(){
    return parent::__toString().'<p>'.$this->getPoids().'kg</p>';
  }
}