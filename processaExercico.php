<?php

namespace Alura;

use Conta\Cliente;
use Conta\Conta, Conta\Funcionario, Conta\Pessoa;


require_once "autoloader.php";



function obterConta($conta)
{
    return $conta;
}
function obterTipo($conta)
{
    return $conta->getUmUsuarioBanco();
}

function obterPessoa($tipo)
{

    return $tipo->getPessoa();
}
function obterNome($pessoa)
{
    return $pessoa->getNome();
}
function obterSexo($pessoa)
{
    return $pessoa->getSexo();
}

function obterInformacoes($pessoa, $conta)
{
    if ($pessoa->getTipo() == 1) {

        return
            '<ul>' .
            '<h1> Funcionario</h1> ' .
            '<li>' . $pessoa->getNome() . '</li>' .
            '<li> ' . $pessoa->getSobrenome() . '</li>' .
            '<li> ' . $pessoa->getSexo() . '</li>' .
            '<li>' . $pessoa->getDataNascimento() . '</li>' .
            '<li>' . $pessoa->getTelefone() . '</li>' .
            '<li>' . $conta->getEmail() . '</li>' .
            '<li>' . $conta->getUmUsuarioBanco()->getCargo() . '</li>' .
            '<li>'  . $conta->getUmUsuarioBanco()->getSalario() . '</li>' .
            '</ul>';
    } else {
        return
            '<ul>' .
            '<h1>Cliente</h1> ' .
            '<li>' . $pessoa->getNome() . '</li>' .
            '<li> ' . $pessoa->getSobrenome() . '</li>' .
            '<li> ' . $pessoa->getSexo() . '</li>' .
            '<li>' . $pessoa->getDataNascimento() . '</li>' .
            '<li>' . $pessoa->getTelefone() . '</li>' .
            '<li>' . $conta->getEmail() . '</li>' .


            '</ul>';
    }
}



$pessoa1 = new Pessoa('Raul', 'Mota', '17/05/2000', Funcionario::TIPO, 'Masculino', '27019230');
$funcionario1 = new Funcionario($pessoa1, 1000.00, 'desenvolvedor');
$conta1 = new Conta($funcionario1, 'raulmota@gmail.com', '1234');

$pessoa2 = new Pessoa('Rafaela', 'Mota', '02/07/1981', Funcionario::TIPO, 'Feminino', '27019230');
$funcionario2 = new Funcionario($pessoa2, 6000.00, 'Cabeleireira');
$conta2 = new Conta($funcionario2, 'raphaela@gmail.com', '1234');

$pessoa3 = new Pessoa('Raul', 'Mota', '17/05/2000', Cliente::TIPO, 'Masculino', '27019230');
$cliente1 = new Cliente($pessoa3, 0, 'mastercard');
$conta3 = new Conta($cliente1, 'raulmota@gmail.com', '1234');

$pessoa4 = new Pessoa('Rodrigo', 'Mota', '15/05/1980', Cliente::TIPO, 'Masculino', '27019230');
$cliente2 = new Cliente($pessoa4, 0, 'mastercard');
$conta4 = new Conta($cliente2, 'rodrigo@gmail.com', '1234');





$informacoesPessoa1 = obterInformacoes($pessoa1, $conta1);
$informacoesPessoa2 = obterInformacoes($pessoa2, $conta2);
$informacoesPessoa3 = obterInformacoes($pessoa3, $conta3);
$informacoesPessoa4 = obterInformacoes($pessoa4, $conta4);



$arrayDeContas = [
    $informacoesPessoa1, $informacoesPessoa2,
    $informacoesPessoa3, $informacoesPessoa4
];

foreach ($arrayDeContas as  $array) {
    echo $array . '<br>';
}
