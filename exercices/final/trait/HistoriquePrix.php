<?php

trait HistoriquePrix{
  private $historique = [];

  public function ajouterHistorique($prix): void
  {
    $this->historique[] = $prix;
    return;
  }

  public function afficherHistorique(): string
  {
    return join(', ', $this->historique);
  }
}