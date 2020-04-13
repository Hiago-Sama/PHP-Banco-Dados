<?php

class Conexao
{
    public static function conectar(){
        $conexao = new PDO('mysql:host=localhost;dbname=estoque', 'hiago', 'root');
        return $conexao;
    }
}