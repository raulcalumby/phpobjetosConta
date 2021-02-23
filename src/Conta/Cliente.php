<?php

namespace Conta;

require_once "autoloader.php";


class Cliente
{
    public Pessoa $pessoa ;
    private float  $credito = 0;
    private string $cartaoCredito;
    const TIPO = 2;

    public function  __construct(Pessoa $pessoa,float $credito, string $cartaoCredito)
    {
        $this->credito = $credito;
        $this->cartaoCredito = $cartaoCredito;
    }

    public function getCredito(): float
    {
        return $this->credito;
    }

    public function getCartaoCredito(): string
    {
        return $this->cartaoCredito;
    }
    public function getPessoa ():Pessoa
    {
        return $this->pessoa;
    }
}
