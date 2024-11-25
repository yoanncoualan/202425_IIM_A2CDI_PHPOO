<?php

class Humain{
  use HorlogeTrait;

  public function __construct(){
    echo $this->afficherHeure(__CLASS__);
  }
}