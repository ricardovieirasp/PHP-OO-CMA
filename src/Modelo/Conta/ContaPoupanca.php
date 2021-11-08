<?php

namespace Rvinfo\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function saca(float $valorASacar) : void
    {
        $tarifaSAque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaSAque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    protected function percentualTarifas():float
    {
        return 0.03;
    }
}