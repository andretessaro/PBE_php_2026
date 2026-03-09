<?php

session_start();
require_once "./Model/LivroModel.php";

class LivroController{

    public function telaCadastro(){
        require "View/livroCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];

        $biblioteca = new Livro($titulo, $valor, $quantidade);
        $biblioteca->salvar();
        header('Location: /PBE_PHP_2026/MVC_avaliação/livro/telaCadastro');
        exit;
    }

    public function listarLivros(){
        $livros = Livro::Listar();
        echo "<pre>";
        print_r($livros);
        echo "</pre";
        require 'View/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'View/livroEditar.php';
    }

    public function atualizar(){
        $livro = new Livros($_POST['titulo'], ($_POST['valor']), ($_POST['quantidade']));
        $livro = atualizar($_GET['id']);
        header('Location: /PHP_PBE_2026/MVC_avaliação/livro/telaEditar?id='. ($_GET['id']));
        exit;
}
    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PBE_PHP_2026/MVC_avaliação/livro/listar');
        exit;
    }
}

?>