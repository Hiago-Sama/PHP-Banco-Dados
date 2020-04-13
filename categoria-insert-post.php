<?php
 require_once 'Class/Categoria.php';

 $categoria = new Categoria();
 $nome = $_POST['nome'];
 $categoria->nome = $nome;
 $categoria->inserir();

 header('location: categorias.php');