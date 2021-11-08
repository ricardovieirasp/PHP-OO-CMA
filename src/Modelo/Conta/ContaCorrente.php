<?php

namespace Rvinfo\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    protected function percentualTarifas():float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino) : void {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}