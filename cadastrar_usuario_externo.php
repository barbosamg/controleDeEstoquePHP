<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php"); ?>
<title>Novo Cadastro</title>

<body>

    <div class="container" style="padding:20px 0;max-width: 800px;">
        <form action="inserir_usuario_externo.php" method="POST">
            <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Cadastro de usuário</h4>
            <div class="form-group">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite o seu nome"
                    autocomplete="off" />
            </div>

            <div class="form-group">
                <label>Sobrenome</label>
                <input class="form-control" type="text" name="sobrenome" placeholder="Digite o seu sobrenome" />
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email"
                    placeholder="Digite o seu e-mail para acessar o sistema" />
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input class="form-control" type="password" id="senha" name="senha" placeholder="Digite uma senha" />
            </div>

            <div class="form-group">
                <label>Repetir senha</label>
                <input class="form-control" type="password" id="senha2" name="senha2"
                    placeholder="Digite sua senha novamente" oninput="validaSenha(this)" />
                <small style="display:none" id="msg-erro">A senha precisa ser igual a senha digitada acima.</small>
            </div>

            <button type="submit" class="btn btn-success btn-sm btn-block">Cadastrar</button>
        </form>
    </div>


    <?php include_once("footer.php"); ?>
    <script>
    function validaSenha(input) {
        if (input.value != document.getElementById('senha').value) {
            input.setCustomValidity('Repita a senha corretamente!');
            document.getElementById('msg-erro').style.display = "block"
        } else {
            input.setCustomValidity('');
            document.getElementById('msg-erro').style.display = "none"
        }
    }
    </script>
</body>

</html>