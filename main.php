<?php

class Usuario {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function autenticar($inputEmail, $inputSenha) {
        return $inputEmail === $this->email && $inputSenha === $this->senha;
    }

    public function exibirUsuario() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function duplicacao() {
        for ($i = 0; $i < 10; $i++) {
            echo "Este é um código duplicado <br>";
        }
    }

    public function verificarIdade($idade) {
        if ($idade < 0) {
            echo "Idade inválida!";
            return;
        }

        echo ($idade < 18) ? "Menor de idade." : (($idade < 60) ? "Adulto." : "Idoso.");
    }
}
