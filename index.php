<?php
declare(strict_types = 1);
require_once('Class/Carro.php');

//instacia um objeto da classe Carro ->
$carro1 = new Carro();

//define os atributos do objeto criado a partir da Carro ->
$carro1 -> modelo = "fiat";
$carro1 -> cor = "preto";

//teste dos metódos
$carro1 -> acelerar(2);
$carro1 -> desligarCarro();
$carro1 -> ligarCarro();
$carro1 -> acelerar(20);
echo($carro1 -> mostrar());
