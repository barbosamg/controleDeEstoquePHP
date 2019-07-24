<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php'?>

<body>
<?php include_once('menu.php'); ?>
    <div style="padding:20px 0" class="container">
        <h3 style="margin-bottom:30px">Lista de Categorias</h3>

        <table class="table">
            <thead>
                <tr>
                <th></th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php
include_once 'conexao.php';
$sql = "SELECT IdCategoria, Nome FROM `categoria`";
$retorno = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
    $idCategoria = $array['IdCategoria'];
    $nome = $array['Nome'];
    ?>
                <tr>
                <td></td>
                    <td><?=$idCategoria?></td>
                    <td><?=$nome?></td>
                    <td><a class="btn-editar btn btn-sm btn-warning" href="editar_categoria.php?id=<?=$idCategoria?>"
                            role="button"><i class="far fa-edit"></i> Editar</a>
                            <a class="btn-editar btn btn-sm btn-danger" href="excluir_categoria.php?id=<?=$idCategoria?>"
                            role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>
                </tr>
                <?php }?>

            </tbody>
        </table>

        <?php
            if (isset($_GET['atualizado'])) {
                echo '<div id="alerta" class="alert alert-success" role="alert">
                Categoria <b>'. $_GET['atualizado']. '</b> atualizada com sucesso!.
                </div>';
            }
            if (isset($_GET['excluido'])) {
                echo '<div id="alerta" class="alert alert-danger" role="alert">
                Categoria <b>'. $_GET['excluido']. '</b> excluida com sucesso!.
                </div>';
            }
        ?>
    </div>

    <?php include_once 'footer.php'?>
</body>

</html>