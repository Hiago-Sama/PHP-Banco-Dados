<?php


class Categoria
{

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = new PDO('mysql:localhost=3306;dbname=estoque', 'root', 'root');
        $resul = $conexao->query($query);
        $list = $resul->fetchAll();
        return $list;
    }
}