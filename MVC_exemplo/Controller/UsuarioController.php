<?php 

session_start();
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        header('Location: /PBE_PHP_2026/MVC_exemplo/usuario/telaCadastro');
        exit;
    }

    public function listarUsuarios(){
        $usuarios = Usuario::Listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'View/usuarioListar.php';

    }

    public function telaEditar(){
        $usuario = Usuario::buscar($_GET['id']);
        require 'View/usuarioEditar.php';
    }

    public function atualizar(){
        $usuario = new Usuarios($_POST['nome'], $_POST['email']);
        $usuario = atualizar($_GET['id']);
        header('Location: /PHP_PBE_2026/MVC_exemplo/usuario/telaEditar?id='.($_GET['id']));
        exit;

    }
}

?>