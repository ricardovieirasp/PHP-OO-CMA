<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$ricardo = new Titular('123.456.789-10', 'Ricardo');
$primeiraConta = new Conta($ricardo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
echo 'Dados da Conta ' . $primeiraConta->recuperaDados();

$jaqueline = new Titular('113.213.215-88', 'Jaqueline');
$segundaConta = new Conta($jaqueline);
echo 'Dados da Conta ' . $segundaConta->recuperaDados();





echo 'Total de Contas: ' . Conta::recuperaNumeroDeContas() . PHP_EOL;
