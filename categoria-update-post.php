<?php

require_once 'Class/Categoria.php';

$nome = $_POST['nome'];
$id = $_POST['id'];
$categoria = new Categoria($id);
$categoria->nome = $nome;
$categoria->id = $id;
$categoria->update();

header('location: categorias.php');