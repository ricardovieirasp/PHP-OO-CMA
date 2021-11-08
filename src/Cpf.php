<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $cpf = filter_var(
            $cpf,
            FILTER_VALIDATE_REGEXP,
            [
                'options'=>[
                    'regexp'=>'/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                ]
            ]);
        if ($cpf === false) {
            echo "CPF Inválido" . PHP_EOL;
            exit();
        }
        $this->cpf = $cpf;
    }

    public function recuperaNumeroCpf(): string
    {
        return $this->cpf;
    }

}
