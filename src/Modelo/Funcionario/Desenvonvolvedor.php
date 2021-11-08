<?php

namespace Rvinfo\Banco\Modelo\Funcionario;

class Desenvonvolvedor extends Funcionario
{
    public function calculaBonificacao(): float {
        return 500.0;
    }

    public function sobeNivel(): void {
        $this->recebeAumento( $this->recuperaSalario() * 0.75 );
    }

}