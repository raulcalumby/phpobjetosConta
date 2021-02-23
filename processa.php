<?php

namespace Alura;

use Conta\Cliente;
use Conta\Conta, Conta\Funcionario , Conta\Pessoa;


require_once "autoloader.php";


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNascimento = $_POST['dataNascimento'];
$telefone = $_POST['telefone'];
$sexo = $_POST[ 'feminino' ];
$tipo = $_POST['funcionario'];
$email = $_POST['email'];
$senha = $_POST['senha'];


var_dump($sexo);


/*

foreach ($_POST as $chave => $valor) {
    $chave = trim(strip_tags($valor));
    if (empty($valor)) {
        array_push($erro, 'existem campos em branco');
    }
}


if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
array_push($erro, 'data invalida');
}


if (empty($telefone) || !is_numeric($telefone)) {

    array_push($erro, 'O telefone deve ser um numero ');
}

if (!empty($site) || !filter_var($site, FILTER_VALIDATE_URL) == false) {
    array_push($erro, 'o site nao esta valido');
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($erro, 'email nao esta valido');
}


if (!empty($erro)) {
    foreach ($erro as $e) {
        echo $e . '<br>';
    }
   if($pessoa->getTipo() == 1 ) {
    echo "<h1> aqui esta o formulario </h1>";
    
   new Conta (new Funcionario(new Pessoa($nome,$sobrenome,$dataNascimento,$tipo ,$sexo ,$telefone), $salario,$cargo),$email,$senha );   
}
}

