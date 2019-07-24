<!DOCTYPE html>
<html lang="en">
<?php 
include_once('head.php');
?>
<title>Gerenciamento de Produtos</title>

<body>
    <div style="padding:20px 0" class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-plus-circle"></i> Adicionar Produto</h5>
                        <p class="card-text">Cadastre novos produtos no estoque.</p>
                        <a href="cadastrar_produto.php" class="btn btn-primary">Cadastrar produto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-newspaper"></i> Lista de Produtos</h5>
                        <p class="card-text">Visualizar, editar ou excluir os produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
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
        </div>
    </div>
</body>

</html>