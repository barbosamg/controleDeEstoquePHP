<!DOCTYPE html>
<html lang="en">

<?php 
include_once('head.php');
include_once('conexao.php');
?>
<title>Cadastro de Produto</title>
<body>
<?php include_once('menu.php'); ?>
    <div style="padding:20px 0;max-width:800px" class="container">
        <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Cadastro de Produto</h4>
        <form action="inserir_produto.php" method="POST">

            <div class="form-group">
                <label for="numeroProduto">Número Produto</label>
                <input type="number" class="form-control" id="numeroProduto" placeholder="Digite o número do produto"
                    name="numeroProduto" required autocomplete="off">
            </div>

            <div class="form-group">
                <label for="nomeProduto">Nome Produto</label>
                <input type="text" class="form-control" id="nomeProduto" name="nomeProduto"
                    placeholder="Digite o nome do produto" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="quantidadeProduto">Quantidade</label>
                <input type="number" class="form-control" id="quantidadeProduto" name="quantidadeProduto"
                    placeholder="Digite a quantidade do produto" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select class="form-control" id="categoria" name="categoria">
                <?php
                $sqlCategoria = "SELECT * FROM categoria ORDER BY Nome ASC";
                $retornoCategoria = mysqli_query($conexao,$sqlCategoria);
                while($array = mysqli_fetch_array($retornoCategoria, MYSQLI_ASSOC)){
                    $idCategoria = $array["IdCategoria"];
                    $nomeCategoria = $array["Nome"];
                ?>
                <option><?=$nomeCategoria?></option>
                <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="fornecedor">Fornecedor</label>
                <select class="form-control" id="categoria" name="fornecedor">
                <?php
                $sqlFornecedor = "SELECT * FROM fornecedor ORDER BY Nome ASC";
                $retornoFornecedor = mysqli_query($conexao,$sqlFornecedor);
                while($array = mysqli_fetch_array($retornoFornecedor, MYSQLI_ASSOC)){
                    $idFornecedor = $array["IdFornecedor"];
                    $nomeFornecedor = $array["Nome"];
                ?>
                <option><?=$nomeFornecedor?></option>
                <?php }?>
                </select>
            </div>
            <button type="submit" class="btn-enviar btn btn-success btn-sm btn-block">Cadastrar</button>

        </form>
    </div>
    
    <?php include_once('footer.php') ?>
</body>

</html>