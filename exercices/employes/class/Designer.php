<?php

class Designer implements EmployeInterface{
  public function travailler(): string
  {
    return 'Faire un rond';
  }

  public function getSalaire(): int
  {
    return 40000;
  }
}