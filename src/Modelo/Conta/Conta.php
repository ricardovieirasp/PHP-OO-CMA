<?php
namespace Rvinfo\Banco\Modelo\Conta;

abstract class Conta {
    // definir dados da conta
    private Titular $titular;
    protected float $saldo = 0;
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
        $tarifaSAque = $valorASacar * $this->percentualTarifas();
        $valorSaque = $valorASacar + $tarifaSAque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar):void {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo():float {
        return $this->saldo;
    }

    public function recuperaDados():string {
        return '|CPF: ' . $this->recuperaCpfTitular() .'|Nome: '. $this->recuperaNomeTitular() .'|Saldo: ' . $this->recuperaSaldo().'|' . $this->titular->recuperaEndereco() .  '|' . PHP_EOL;
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

    abstract protected function percentualTarifas(): float;

}
