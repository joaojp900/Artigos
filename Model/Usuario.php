<?php

class Usuario
{
    public $id;
    public $capa;
    public $titulo;
    public $descricao;
    public $contato;

    public function __construct(){
        include_once 'Conexao.php';
    }

    public function CadastrarArtigo(){

        $con = Conexao::conectar();

        $cmd = $con->prepare("INSERT INTO Artigos (titulo, contato, descricao)
        VALUES (:titulo, :contato, :descricao)");

        $cmd->bindParam(':titulo',  $this->titulo);
        $cmd->bindParam(':contato',  $this->contato);
        $cmd->bindParam(':descricao',  $this->descricao);
       
        $cmd->execute();
    }

    public function DetalhesArtigo($id){ //Show
        
        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM Artigos WHERE id = :id");
        $cmd->bindParam(':id', $id);
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_OBJ); //Retorna os registros como objetos 
    }

    public function VisualizarArtigo(){ //Todods os Artigos

        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM Artigos");
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function AtualizarArtigo(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("UPDATE Artigos SET
         titulo = :titulo,
         descricao = :descricao,
         contato = :contato 
         WHERE id = :id");
         $cmd->bindParam(':id', $this->id);
         $cmd->bindParam(':titulo', $this->titulo);
         $cmd->bindParam(':descricao', $this->descricao);
         $cmd->bindParam(':contato', $this->contato);
         $cmd->execute();
         return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function DeletarArtigo(){

        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM Artigos WHERE id = :id");
        $cmd->bindParam(":id", $this->id);
        $cmd->execute();
    }
}
