<?php

namespace Conta;


class Funcionario

{
    public  Pessoa $pessoa;
    private float  $salario;
    private string $cargo;
    const TIPO = 1;

    public function __construct(Pessoa $pessoa, float $salario,  string $cargo)
    {

        $this->salario = $salario;
        $this->cargo = $cargo;
        $this->pessoa = $pessoa;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
    public function getPessoa(): Pessoa 
    {
        return $this->pessoa;
    }
}
