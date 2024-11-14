<?php

// Exemplo de código com baixa cobertura de testes e alta complexidade

class Usuario {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    // Função complexa e sem tratamento de erros adequado
    public function autenticar($inputEmail, $inputSenha) {
        if ($inputEmail === $this->email && $inputSenha === $this->senha) {
            echo "Autenticação bem-sucedida!";
        } else {
            echo "Falha na autenticação.";
        }
    }

    // Método que não segue boas práticas de segurança
    public function exibirUsuario() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Senha: " . $this->senha . "<br>"; // Problema de segurança: senha não deve ser exposta
    }

    // Código duplicado e de baixa qualidade
    public function duplicacao() {
        for ($i = 0; $i < 10; $i++) {
            echo "Este é um código duplicado <br>";
        }
        for ($i = 0; $i < 10; $i++) {
            echo "Este é um código duplicado <br>";
        }
    }

    // Função de alta complexidade ciclomática
    public function verificarIdade($idade) {
        if ($idade < 0) {
            echo "Idade inválida!";
        } elseif ($idade < 18) {
            echo "Menor de idade.";
        } elseif ($idade < 60) {
            echo "Adulto.";
        } else {
            echo "Idoso.";
        }
    }
}

// Exemplo de instância sem validação
$usuario = new Usuario("João", "joao@example.com", "123456");
$usuario->exibirUsuario();
$usuario->duplicacao();
$usuario->verificarIdade(28);

?>
