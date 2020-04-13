<?php
 require_once 'cabecalho.php';
 require_once 'Class/Categoria.php';

 $id = $_GET['id'];
 $categoria = new Categoria($id);

 

?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<form action="categoria-update-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input name='id' type='hidden' value='<?php echo "$categoria->id" ?>'>
                <input name='nome' type="text" value="<?php echo "$categoria->nome" ?>" class="form-control" placeholder="Nome da Categoria">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
