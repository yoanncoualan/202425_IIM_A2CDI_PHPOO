<?php

class Developpeur implements EmployeInterface{
  public function travailler(): string
  {
    return 'Tapoter sur son clavier';
  }

  public function getSalaire(): int
  {
    return 50000;
  }
}