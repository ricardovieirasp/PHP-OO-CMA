<?php

use Rvinfo\Banco\Modelo\Conta\Titular;
use Rvinfo\Banco\Modelo\Cpf;
use Rvinfo\Banco\Modelo\Funcionario\Diretor;
use Rvinfo\Banco\Modelo\Funcionario\Gerente;

require_once "autoload.php";

$autenticador = new \Rvinfo\Banco\Service\Autenticador();

$umDiretor = new Diretor("Joaquim Silva", new Cpf("123.456.987-88"), 10000.0);
$umGerente = new Gerente("Joaquim Silva Jr", new Cpf("123.456.447-88"), 5000.0);
$umTitular = new Titular(new Cpf("123.456.987-88"), "Joana Quintana", new \Rvinfo\Banco\Modelo\Endereco('02556-556','Rua Q','112','SL 2','Geral','Santos','SP'));

$autenticador->tentaLogin($umDiretor, '1234');
$autenticador->tentaLogin($umGerente,'4321');
$autenticador->tentaLogin($umTitular,'abcd');
