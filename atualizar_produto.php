<?php
include_once 'conexao.php';

$id = $_POST['idProduto'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];
$nomeProduto = $_POST['nomeProduto'];
$numeroProduto = $_POST['numeroProduto'];
$quantidadeProduto = $_POST['quantidadeProduto'];

$sql = "UPDATE estoque SET Nome = '$nomeProduto', Categoria = '$categoria', Quantidade = $quantidadeProduto, Fornecedor = '$fornecedor'" .
       " WHERE IdProduto = $id";
$update = mysqli_query($conexao,$sql);

if($update){
    header("Location: listar_produtos.php?atualizado=".$id); 
}
?>
