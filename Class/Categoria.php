<?php

require_once "Class/Conexao.php";

class Categoria
{
    public $id;
    public $nome;
    

    public function __construct($id = false)
    {
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }


    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::conectar();
        $resul = $conexao->query($query);
        $list = $resul->fetchAll();
        return $list;
    }
    public function carregar()
    {
        $query = "SELECT id, nome FROM categorias WHERE id =" . $this->id;
        $conexao = Conexao::conectar();
        $resul = $conexao->query($query);
        $list = $resul->fetchAll();
        foreach ($list as $line){
          $this->nome = $line['nome'];
        }
       
    }

    public function inserir()
    {
        $query = "INSERT INTO categorias (nome) values ('". $this->nome ."')";
        $conexao = Conexao::conectar();
        $conexao->exec($query);
    }

    public function update()
    {
        $query = "UPDATE categorias SET nome = '". $this->nome ."' WHERE id =".$this->id;
        $conexao = Conexao::conectar();
        $conexao->exec($query);
    }


    public function delete()
    {
        $query = "DELETE FROM categorias WHERE id =".$this->id;
        $conexao = Conexao::conectar();
        $conexao->exec($query);
    }
}