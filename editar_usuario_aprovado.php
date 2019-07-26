<?php

include_once 'conexao.php';
include_once('head.php');
$id = $_GET['id'];

?>

<div style="padding:20px 0;max-width:800px" class="container">
    <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Formulário de Aprovação de Novo Usuário
    </h4>
    <form action="inserir_usuario_aprovado.php" method="POST">
        <?php
            $sql = "SELECT * FROM usuario WHERE IdUsuario = $id";
            $retorno = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($retorno,MYSQLI_ASSOC)){
                $idUsuario = $array['IdUsuario'];
                $nome = $array['Nome'];
                $sobrenome = $array['Sobrenome'];
                $email = $array['Email'];
        ?>
        <input style="display:none" id="idUsuario" name="idUsuario" value="<?=$idUsuario?>">

        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required autocomplete="off"
                    value="<?=$nome?>" readonly>
            </div>

            <div class="form-group col-md-6">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required autocomplete="off"
                    value="<?=$sobrenome?>" readonly>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" required autocomplete="off"
                    value="<?=$email?>" readonly>
            </div>

            <div class="form-group col-md-6">
                <label>Nível de acesso</label>
                <select class="form-control" name="nivelUsuario">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn-enviar btn btn-success btn-sm btn-block">Confirmar</button>
        <?php } ?>
    </form>
</div>