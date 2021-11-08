<?php
namespace Rvinfo\Banco\Modelo\Funcionario;

use Rvinfo\Banco\Modelo\Cpf;
use Rvinfo\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario) {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recebeAumento(float $aumento):void {
        if($aumento < 0) {
            echo "O aumento deve ser positivo";
            return;
        }
        $this->salario += $aumento;
    }

    public function recuperaSalario(): float {
        return $this->salario;
    }

    public function alteraNome(string $nome) {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    abstract public function calculaBonificacao():float;
}
