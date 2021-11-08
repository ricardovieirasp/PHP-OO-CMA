<?php

namespace Rvinfo\Banco\Modelo;

interface Autenticavel {
    public function podeAutenticar(string $senha):bool;
}
