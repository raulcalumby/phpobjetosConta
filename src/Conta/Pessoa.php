<?php

namespace Conta;


class Pessoa 

{

public string $nome;
public string $sobrenome;
public string $dataNascimento;
public int    $tipo;
public string $sexo;
public string $telefone;

const CLIENTE = 1 ;
const FUNCIONARIO = 2;




public function __construct(string $nome , string $sobrenome , string $dataNascimento , 
int $tipo, string $sexo , $telefone)
{
    $this->nome           = $nome;
    $this->sobrenome      = $sobrenome;
    $this->dataNascimento = $dataNascimento;
    $this->tipo           = $tipo;
    $this->sexo           = $sexo;
    $this->telefone       = $telefone;
}
public function getTipo () : string
{
    return $this->tipo;
}

public function getNome (): string
{
    return $this->nome;
}

public function getSobrenome (): string
{
    return $this->sobrenome;
}

public function getDataNascimento (): string
{
    return $this->dataNascimento;
}
public function getSexo(): string 
{
    return $this->sexo;
}
public function getTelefone(): string
{
    return $this->telefone;
}
public function idadePessoa()
{

}
public function tipo ($tipo )
{
   
}

}
$teste = ['a' . 'b'];