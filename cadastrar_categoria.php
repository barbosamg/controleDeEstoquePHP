<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php') ?>
<title>Cadastro de Categoria</title>
<body>
    <?php include_once('menu.php'); ?>


    <div style="padding:20px 0;max-width:800px" class="container">
        <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Formulário de Cadastro de Categoria</h4>
        <form action="inserir_categoria.php" method="POST">
            <div class="form-group">
                <label for="numeroProduto">Nome Categoria</label>
                <input type="text" class="form-control" id="nomeCategoria" placeholder="Digite o nome da categoria"
                    name="nomeCategoria" required autocomplete="off">
            </div>
            <button type="submit" class="btn-enviar btn btn-success btn-sm btn-block">Cadastrar</button>
        </form>
    </div>


    <?php include_once('footer.php'); ?>
</body>

</html>