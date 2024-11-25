<?php

class Produit {
  use LoggerTrait;

  // Liste des propriétés
  private $nom;
  private $description;
  private $quantite;
  private $prix;

  public function __construct(
    string $nom,
    ?string $description,
    int $quantite,
    float $prix
  ){
    $this->log(__CLASS__, 'Nouvelle instance');
    $this->setNom($nom);
    $this->setDescription($description);
    $this->setQuantite($quantite);
    $this->setPrix($prix);
  }

  // Setters et Getters
  final public function setNom(string $value): self
  {
    $this->nom = $value;
    return $this;
  }
  public function getNom(): string
  {
    return $this->nom;
  }
 
  public function setDescription(?string $value): self
  {
    $this->description = $value;
    return $this;
  }
  public function getDescription(): ?string
  {
    return $this->description;
  }
 
  public function setQuantite(int $value): self
  {
    $this->quantite = $value;
    return $this;
  }
  public function getQuantite(): int
  {
    return $this->quantite;
  }
 
  public function setPrix(float $value): self
  {
    $this->prix = $value;
    return $this;
  }
  public function getPrix(): float
  {
    return $this->prix;
  }

  public function __toString()
  {
    return '<h1>'. $this->getNom() .'</h1>'.'<p>'. $this->getQuantite() .' produits en stock</p>'.'<p>'. $this->getPrix() .'€</p>';
  }
}