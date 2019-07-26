<?php
include_once 'conexao.php';
include_once 'password.php';

$nome = trim($_POST["nome"]);
$sobrenome = trim($_POST["sobrenome"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);
$nivelUsuario = 3;

$sql = "INSERT INTO `usuario` (`Nome`, `Sobrenome`, `Email`, `Senha`, `NivelUsuario`, `Status`) VALUES " .
    "('$nome', '$sobrenome','$email', sha1('$senha'), $nivelUsuario, 'Inativo')";
$inserir = mysqli_query($conexao, $sql);
?>

<?php include_once 'head.php'?>
<div style="padding:20px 0;max-width:800px;text-align:center" class="container">
    <h4>Usuário <b><?=$nome .' '.$sobrenome?></b> Cadastrado com sucesso, aguarde pela aprovação!</h4>
    <a class="btn btn-sm btn-primary" role="button" href="index.php">Voltar</a>
</div>