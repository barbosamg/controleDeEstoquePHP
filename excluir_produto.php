<?php
include_once 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM estoque WHERE IdProduto = $id";
$update = mysqli_query($conexao,$sql);

if($update){
    header("Location: listar_produtos.php?excluido=".$id); 
}
?>
