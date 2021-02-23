<?php

namespace Conta;

require_once 'autoloader.php';

use Conta\Pessoa;



class Conta 
{

    public string $senha;
    public string $email;
    public $umUsuarioBanco;




    public function __construct($umUsuarioBanco, string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->umUsuarioBanco = $umUsuarioBanco;
    }



    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }
    public function getUmUsuarioBanco()
    {
        return $this->umUsuarioBanco;
    }
}
