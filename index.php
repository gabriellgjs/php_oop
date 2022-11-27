<?php
declare(strict_types = 1);
require_once('Class/Carro.php');
require_once('Class/MaquinaDeCostura.php');

//instacia um objeto da classe MaquinaDeCostura ->
$mC1 = new MaquinaDeCostura('reta');

$mC1->setLigado(true);
$mC1->setLinha('9701');
echo($mC1->costurar());


