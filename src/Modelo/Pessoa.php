<?php
namespace Rvinfo\Banco\Modelo;

abstract class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome de Titular precisa de no mínimo 5 caracteres";
            exit;
        }
    }

}
