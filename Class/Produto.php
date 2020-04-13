<?php

class Produto
{
    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $categoria_id;

    public static function list(){
        $query = "SELECT id, nome, preco, quantidade, categoria_id FROM produtos";
        $conexao = Conexao::pegarConexao();
        $result = $conexao->query($query);
        $lista = $result->fetchAll();
        return $lista;
    } 

}