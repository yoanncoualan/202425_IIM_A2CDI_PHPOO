<?php 

class Entreprise{
  private $employes = [];

  public function ajoutEmploye($employe): self
  {
    $this->employes[] = $employe;
    // array_push($this->employes, $employe);
    return $this;
  }

  public function getMasseSalariale(): int
  {
    $masse = 0;
    foreach ($this->employes as $employe) {
      $masse += $employe->getSalaire();
    }
    return $masse;
  }
}