<?php
include_once 'conexao.php';

$nomeCategoria = trim($_POST["nomeCategoria"]);

$sql = "INSERT INTO `categoria` (`Nome`) VALUES ('$nomeCategoria')";
$inserir = mysqli_query($conexao, $sql);
?>
<?php include_once 'head.php'?>
<div style="padding:20px 0;max-width:800px;text-align:center" class="container">
    <h4>Categoria <b><?=$nomeCategoria?></b> Adicionada com sucesso!</h4>
    <a class="btn btn-sm btn-primary" role="button" href="cadastrar_categoria.php">Voltar para o cadastro de
        categoria</a>
</div>