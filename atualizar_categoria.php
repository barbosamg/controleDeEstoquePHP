<?php
include_once 'conexao.php';

$id = $_POST['idCategoria'];
$categoria = $_POST['nomeCategoria'];

$sql = "UPDATE categoria SET Nome = '$categoria' WHERE IdCategoria = $id";
$update = mysqli_query($conexao,$sql);

if($update){
    header("Location: listar_categorias.php?atualizado=".$id); 
}
?>
