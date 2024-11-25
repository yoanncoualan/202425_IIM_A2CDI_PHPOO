<?php

Trait HorlogeTrait{
  public function afficherHeure($className): int|string
  {
    $date = new DateTime();
    if($className == 'Humain'){
      return $date->format('d/m/Y H:i:s');
    }
    else{
      return $date->getTimestamp();
    }
  }
}