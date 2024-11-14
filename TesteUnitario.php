<?php

use PHPUnit\Framework\TestCase;

require_once 'Usuario.php';

class UsuarioTest extends TestCase {
    public function testAutenticacao() {
        $usuario = new Usuario("João", "joao@example.com", "123456");
        $this->assertTrue($usuario->autenticar("joao@example.com", "123456"));
        $this->assertFalse($usuario->autenticar("joao@example.com", "senha_errada"));
    }

    public function testVerificarIdade() {
        $usuario = new Usuario("João", "joao@example.com", "123456");
        $this->expectOutputString("Adulto.");
        $usuario->verificarIdade(25);
    }
}
