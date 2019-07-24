<?php
include_once 'conexao.php';

$numeroProduto = trim($_POST["numeroProduto"]);
$nomeProduto = trim($_POST["nomeProduto"]);
$quantidadeProduto = trim($_POST["quantidadeProduto"]);
$categoriaProduto = trim($_POST["categoria"]);
$fornecedorProduto = trim($_POST["fornecedor"]);

$sql = "INSERT INTO `estoque` (`Categoria`, `Fornecedor`, `Nome`, `Numero`, `Quantidade`) VALUES ('$categoriaProduto', '$fornecedorProduto',
'$nomeProduto', $numeroProduto, $quantidadeProduto)";
$inserir = mysqli_query($conexao, $sql);
?>
<?php include_once('head.php') ?>
<div style="padding:20px 0;max-width:800px;text-align:center" class="container">
    <h4>Produto <b><?=$nomeProduto?></b> Adicionado com sucesso!</h4>
    <a class="btn btn-sm btn-primary" role="button" href="cadastrar_produto.php">Voltar para o cadastro de produtos</a>
</div>