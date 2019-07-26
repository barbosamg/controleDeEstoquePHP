<!DOCTYPE html>
<html lang="en">
<?php
include_once 'head.php';
include_once 'validacao.php';
?>
<title>Gerenciamento de Produtos</title>

<body>
    <div style="padding:20px 0" class="container">
        <div class="row">
            <?php
if (($nivel == 1) || ($nivel == 2)) {
    ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-plus-circle"></i> Adicionar Produto</h5>
                        <p class="card-text">Cadastre novos produtos no estoque.</p>
                        <a href="cadastrar_produto.php" class="btn btn-primary">Cadastrar produto</a>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-newspaper"></i> Lista de Produtos</h5>
                        <p class="card-text">Visualizar, editar ou excluir os produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-primary">Ver Produtos</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <?php
if (($nivel == 1) || ($nivel == 2)) {
    ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-tags"></i> Adicionar Categoria</h5>
                        <p class="card-text">Cadastre novas categorias para os produtos.</p>
                        <a href="cadastrar_categoria.php" class="btn btn-primary">Cadastrar categoria</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-truck-moving"></i> Adicionar Fornecedor</h5>
                        <p class="card-text">Cadastre novos fornecedores de seus produtos.</p>
                        <a href="cadastrar_fornecedor.php" class="btn btn-primary">Cadastrar fornecedor</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <br>
        <div class="row">
            <?php
if (($nivel == 1) || ($nivel == 2)) {
    ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-truck-moving"></i> Cadastrar Usuário</h5>
                        <p class="card-text">Cadastre um novo usuário no sistema.</p>
                        <a href="cadastrar_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-truck-moving"></i> Aprovar Usuários</h5>
                        <p class="card-text">Aprove novo usuários que foram cadastrados no sistema.</p>
                        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>