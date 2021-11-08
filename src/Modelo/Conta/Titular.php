<?php
namespace Rvinfo\Banco\Modelo\Conta;

use Rvinfo\Banco\Modelo\Autenticavel;
use Rvinfo\Banco\Modelo\Cpf;
use Rvinfo\Banco\Modelo\Endereco;
use Rvinfo\Banco\Modelo\Pessoa;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco() : string {
        return $this->endereco->recuperaRua() . ',' . $this->endereco->recuperaNumero();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
