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
if($inserir){
    header("Location: listar_produtos.php?cadastrado=1"); 
}
?>
