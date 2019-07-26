<?php
session_start();
include_once 'conexao.php';
if ($_SESSION["usuario"] == "" || $_SESSION["usuario"] == null) {
    header("Location: index.php");
}
$usuarioLogado = $_SESSION["usuario"];
$sql = "SELECT NivelUsuario FROM usuario WHERE IdUsuario = $usuarioLogado  AND Status = 'Ativo'";
$retorno = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($retorno);
$nivel = $array['NivelUsuario'];
?>