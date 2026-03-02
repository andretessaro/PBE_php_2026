<?php 

session_start();
require_once "./Model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/ProdutoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $data = $_POST['data'];
        


        $usuario = new Produto($nome, $valor, $quantidade, $data);
        $usuario->salvar();
        header('Location: /PBE_PHP_2026/Atividade01/produto/telaCadastro');
        exit;
    }

    public function listarProdutos(){
        $produtos = Produto::Listar();
        echo "<pre>";
        print_r($produtos);
        echo "</pre>";
        require 'View/produtoListar.php';
     }

    public function telaEditar(){
        $produto = Produto::buscar($_GET['id']);
        require 'View/produtoEditar.php';
    }

    public function atualizar(){
        $produto = new Produtos($_POST['nome'], ($_POST['valor']), ($_POST['quantidade']), $_POST['data']);
        $produto = atualizar($_GET['id']);
        header('Location: /PHP_PBE_2026/Atividade01/produto/telaEditar?id='.($_GET['id']));
        exit;
}
    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location: /PBE_PHP_2026/Atividade01/produto/listar');
        exit;
    }
}

?>