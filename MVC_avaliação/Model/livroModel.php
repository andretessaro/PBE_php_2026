<?php

require_once "./database/Database.php";

class livro{
    private $titulo;
    private $valor;
    private $quantidade;

    public function __construct($titulo, $valor, $quantidade){
        $this->titulo = $titulo;
        $this->valor = $valor;
        $this->quantidade = $quantidade;

    }

    public function salvar(){
        $pdo = Database::conectar();
        $sql = "INSERT INTO livros (titulo, valor, quantidade) VALUES (:titulo, :valor, :quantidade)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $this->titulo, 'valor' => $this->valor, 'quantidade' => $this->quantidade]);
    }
       
    public static function listar(){
        $pdo = Database::conectar();
        $smt = $pdo->query("SELECT * FROM livros");
        return $smt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar($id){
        $pdo = Database::conectar();
        $smt = $pdo->prepare("SELECT * FROM livros WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livros SET titulo = :titulo, valor =      :valor WHERE id = :id");
        $stmt->excute(['id' => $id, 'titulo' => $this->titulo, 'valor' => $this->valor, 'quantidade' => $quantidade]);
     }

     public static function excluir($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
    
}
   
?>