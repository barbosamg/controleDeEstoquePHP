<!DOCTYPE html>
<html lang="en">
<?php
include_once 'head.php';
include_once 'validacao.php';
?>
<title>Lista de Produtos</title>
<body>
    <?php include_once 'menu.php';?>
    <div style="padding:20px 0" class="container">
        <h3 style="margin-bottom:30px">Lista de Produtos</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nro Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php
include_once 'conexao.php';
$sql = "SELECT IdProduto, Categoria, Fornecedor, Nome, Numero, Quantidade FROM `estoque`";
$retorno = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
    $idProduto = $array['IdProduto'];
    $categoria = $array['Categoria'];
    $fornecedor = $array['Fornecedor'];
    $nome = $array['Nome'];
    $numero = $array['Numero'];
    $quantidade = $array['Quantidade'];
    ?>
                <tr>
                    <td><?=$idProduto?></td>
                    <td><?=$nome?></td>
                    <td><?=$numero?></td>
                    <td><?=$categoria?></td>
                    <td><?=$quantidade?></td>
                    <td><?=$fornecedor?></td>
                    <td>
                        <?php if (($nivel == 1) || ($nivel == 2)) {?>
                        <a class="btn-editar btn btn-sm btn-warning" href="editar_produto.php?id=<?=$idProduto?>"
                            role="button"><i class="far fa-edit"></i> Editar</a>
                        <?php }?>
                        <?php if ($nivel == 1) {?>
                        <a class="btn-editar btn btn-sm btn-danger" href="excluir_produto.php?id=<?=$idProduto?>"
                            role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>
                    <?php }?>
                </tr>
                <?php }?>

            </tbody>
        </table>

        <?php
if (isset($_GET['atualizado'])) {
    echo '<div id="alerta" class="alert alert-success" role="alert">
                Produto <b>' . $_GET['atualizado'] . '</b> atualizado com sucesso!.
                </div>';
}
if (isset($_GET['excluido'])) {
    echo '<div id="alerta" class="alert alert-danger" role="alert">
                Produto <b>' . $_GET['excluido'] . '</b> excluido com sucesso!.
                </div>';
}
if (isset($_GET['cadastrado'])) {
    echo '<div id="alerta" class="alert alert-success" role="alert">
                Produto cadastrado com sucesso!.
                </div>';
}
?>
    </div>

    <?php include_once 'footer.php'?>
</body>

</html>