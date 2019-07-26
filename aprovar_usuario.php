<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php'?>
<title>Aprovar Usuário</title>

<body>
    <?php include_once 'menu.php';?>
    <div style="padding:20px 0" class="container">
        <h3 style="margin-bottom:30px">Lista de Categorias</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php
include_once 'conexao.php';
$sql = "SELECT * FROM `usuario` WHERE status = 'Inativo'";
$retorno = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
    $idUsuario = $array['IdUsuario'];
    $nome = $array['Nome'];
    $email = $array['Email'];
    $nivel = $array['NivelUsuario'];
    switch ($nivel) {
        case 1:
            $nivel = "Administrador";
            break;
        case 2:
            $nivel = "Funcionário";
            break;
        case 3:
            $nivel = "Conferente";
            break;
    }
    $id = $array['IdUsuario'];
    ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$nome?></td>
                    <td><?=$email?></td>
                    <td><?=$nivel?></td>
                    <td>
                        <form action="" method="POST">
                            <a type="submit" class="btn-editar btn btn-sm btn-primary"
                                href="editar_usuario_aprovado.php?id=<?=$idUsuario?>" role="button"><i
                                    class="far fa-edit"></i> Aprovar</a>
                            <a class="btn-editar btn btn-sm btn-danger"
                                href="inserir_usuario_aprovado.php?id=<?=$idUsuario?>&reprovar=1" role="button"><i
                                    class="far fa-trash-alt"></i> Reprovar</a>
                    </td>
                    </form>
                </tr>
                <?php }?>

            </tbody>
        </table>

        <?php
if (isset($_GET['atualizado'])) {
    echo '<div id="alerta" class="alert alert-success" role="alert">
                Usuário <b>' . $_GET['atualizado'] . '</b> aprovado com sucesso!.
                </div>';
}
if (isset($_GET['excluido'])) {
    echo '<div id="alerta" class="alert alert-danger" role="alert">
    Usuário <b>' . $_GET['excluido'] . '</b> excluido com sucesso!.
                </div>';
}
?>
    </div>

    <?php include_once 'footer.php'?>
</body>

</html>