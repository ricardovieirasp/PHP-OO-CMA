<?php
namespace Rvinfo\Banco\Modelo;

final class Endereco
{
    private string $cep;
    private string $rua;
    private string $numero;
    private string $complemento;
    private string $bairro;
    private string $cidade;
    private string $uf;

    public function __construct(string $cep, string $rua, string $numero, string $complemento, string $bairro, string $cidade, string $uf)
    {
        $this->validaCep($cep);
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
    }

    private function validaCep(string $cep) {
        $cep = filter_var(
            $cep,
            FILTER_VALIDATE_REGEXP,
            [
                'options'=>[
                    'regexp'=>'/^[0-9]{5}\-[0-9]{3}$/'
                ]
            ]);
        if ($cep === false) {
            echo "CEP Inválido" . PHP_EOL;
            exit();
        }
    }

    public function recuperaCep(): string {
        return $this->cep;
    }

    public function recuperaUf(): string {
        return $this->uf;
    }

    public function recuperaCidade(): string {
        return $this->cidade;
    }

    public function recuperaBairro(): string {
        return $this->bairro;
    }

    public function recuperaRua(): string {
        return $this->rua;
    }

    public function recuperaNumero(): string {
        return $this->numero;
    }

    public function recuperaComplemento(): string {
        return $this->complemento;
    }

    public function __toString():string {
        return $this->recuperaRua() . ',' . $this->recuperaNumero() . ' - ' . $this->recuperaComplemento() . PHP_EOL .
               $this->recuperaBairro() . ' - ' . $this->recuperaCidade() . '/' . $this->recuperaUf() . PHP_EOL .
               $this->recuperaCep();
    }

    public function __get(string $nomeAtributo) {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set(string $nomeAtributo, $valorDoAtributo): void {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($valorDoAtributo);
    }

}

