<?php
namespace Rvinfo\Banco\Modelo;

final class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var(
            $numero,
            FILTER_VALIDATE_REGEXP,
            [
                'options'=>[
                    'regexp'=>'/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                ]
            ]);
        if ($numero === false) {
            echo "CPF Inválido" . PHP_EOL;
            exit();
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

}
