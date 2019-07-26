<?php
include_once 'conexao.php';

if(isset($_POST['idUsuario']) && isset($_POST['nivelUsuario'])){
    $id = $_POST['idUsuario'];
    $nivel = $_POST['nivelUsuario'];
}
$delete = "";
$update = "";
if(isset($_GET['reprovar'])){
    $id = $_GET['id'];
    echo $sql = "DELETE FROM usuario WHERE IdUsuario = $id ";
    $delete = mysqli_query($conexao, $sql);
} else {
    $sql = "UPDATE usuario SET status = 'Ativo', NivelUsuario = $nivel WHERE IdUsuario = $id ";
    $update = mysqli_query($conexao, $sql);
}



if($update != ""){
    header("Location: aprovar_usuario.php?atualizado=".$id); 
}

if($delete != ""){
    header("Location: aprovar_usuario.php?excluido=".$id); 
}