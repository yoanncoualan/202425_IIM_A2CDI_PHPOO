<?php

class Robot{
  use HorlogeTrait;

  public function __construct(){
    echo $this->afficherHeure(__CLASS__);
  }
}