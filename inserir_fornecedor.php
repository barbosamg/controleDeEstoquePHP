<?php
include_once 'conexao.php';

$nomeFornecedor = trim($_POST["nomeFornecedor"]);

$sql = "INSERT INTO `fornecedor` (`Nome`) VALUES ('$nomeFornecedor')";
$inserir = mysqli_query($conexao, $sql);
?>
<?php include_once 'head.php'?>
<div style="padding:20px 0;max-width:800px;text-align:center" class="container">
    <h4>Fornecedor <b><?=$nomeFornecedor?></b> Adicionado com sucesso!</h4>
    <a class="btn btn-sm btn-primary" role="button" href="cadastrar_fornecedor.php">Voltar para o cadastro de
        fornecedor</a>
</div>