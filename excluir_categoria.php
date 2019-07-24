<?php
include_once 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM categoria WHERE IdCategoria = $id";
$update = mysqli_query($conexao,$sql);

if($update){
    header("Location: listar_categorias.php?excluido=".$id); 
}
?>
