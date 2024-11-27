<?php

// https://github.com/yoanncoualan/202425_IIM_A2CDI_PHPOO

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