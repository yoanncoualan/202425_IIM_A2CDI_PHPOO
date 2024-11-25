<?php

require_once './interface/EmployeInterface.php';
require_once './class/Designer.php';
require_once './class/Developpeur.php';
require_once './class/Entreprise.php';

$entreprise = new Entreprise();

$dev = new Developpeur();
$designer = new Designer();

$entreprise->ajoutEmploye($dev)
  ->ajoutEmploye($designer);

echo $entreprise->getMasseSalariale();