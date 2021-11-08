<?php

use Rvinfo\Banco\Modelo\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco('03566-565','Rua um','1','AP 1','Bairro 1','São Paulo','SP');
$doisEndereco = new Endereco('03266-565','Rua zum','12','AP 11','Bairro 1111','São Paulo','SP');
$tresEndereco = new Endereco('01566-565','Rua rum','13','AP 31','Bairro 133','São Paulo','SP');
$quatroEndereco = new Endereco('13566-565','Rua dum','14','AP 41','Bairro 144','São Paulo','SP');

echo $umEndereco . PHP_EOL;
echo $doisEndereco . PHP_EOL;
echo $tresEndereco . PHP_EOL;
echo $quatroEndereco . PHP_EOL;

