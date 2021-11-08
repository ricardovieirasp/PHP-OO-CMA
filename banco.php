<?php
require_once 'autoload.php';

use Rvinfo\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Rvinfo\Banco\Modelo\{Cpf, Endereco};
use Rvinfo\Banco\Modelo\Funcionario\Desenvonvolvedor;



$enderecoRicRos = new Endereco('01221-225', 'Rua Qualquer', '112-A', 'AP12', 'Geronimo', 'Carajé', 'SP');
$ricardo = new Titular(new Cpf('123.456.789-10'), 'Ricardo', $enderecoRicRos);
$primeiraConta = new ContaCorrente($ricardo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
echo 'Dados da Conta ' . $primeiraConta->recuperaDados();

$roseli = new Titular(new Cpf('113.213.215-88'), 'Roseli', $enderecoRicRos);
$segundaConta = new ContaPoupanca($roseli);
echo 'Dados da Conta ' . $segundaConta->recuperaDados();

echo 'Total de Contas: ' . Conta::recuperaNumeroDeContas() . PHP_EOL;

$jair = new Desenvonvolvedor('Jair Mendes', new Cpf('223.564.455-88'),200);
