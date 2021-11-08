<?php

class Conta {
    // definir dados da conta
    private Titular $titular;
    private float $saldo = 0;
    private static $numeroContas = 0;

    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct() {
        self::$numeroContas--;
    }

    public function saca(float $valorASacar) {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar):void {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino) : void {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo():float {
        return $this->saldo;
    }

    public function recuperaDados():string {
        return '|CPF: ' . $this->recuperaCpfTitular() .'|Nome: '. $this->recuperaNomeTitular() .'|Saldo: ' . $this->recuperaSaldo().'|' . PHP_EOL;
    }

    public function recuperaNomeTitular():string {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular() : string {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas() : int {
        return Conta::$numeroContas;
    }

}
