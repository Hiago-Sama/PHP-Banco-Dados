

<?php  require_once 'Class/Categoria.php';

$id = $_GET['id'];
$categoria = new Categoria($id);
$categoria->delete();

header('Location: categorias.php');

 