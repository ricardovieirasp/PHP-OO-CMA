<?php
require_once 'Cpf.php';

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = new Cpf($cpf);
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumeroCpf();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome de Titular precisa de no mínimo 5 caracteres";
            exit;
        }
    }
    
}
