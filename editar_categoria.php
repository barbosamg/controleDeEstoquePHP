<?php

include_once 'conexao.php';
include_once('head.php');
$id = $_GET['id'];

?>

<div style="padding:20px 0;max-width:800px" class="container">
    <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Formulário de Cadastro de Produto</h4>
    <form action="atualizar_categoria.php" method="POST">
        <?php
            $sql = "SELECT * FROM categoria WHERE IdCategoria = $id";
            $retorno = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($retorno,MYSQLI_ASSOC)){
                $idCategoria = $array['IdCategoria'];
                $nome = $array['Nome'];
        ?>
        <input style="display:none" id="idCategoria" name="idCategoria" value="<?=$idCategoria?>">
        <div class="form-group">
            <label for="nomeCategoria">Nome Categoria</label>
            <input type="text" class="form-control" id="nomeCategoria" placeholder="Digite o nome da categoria"
                name="nomeCategoria" required autocomplete="off" value="<?=$nome?>">
        </div>
        <button type="submit" class="btn-enviar btn btn-primary btn-sm btn-block">Atualizar</button>
        <?php } ?>
    </form>
</div>