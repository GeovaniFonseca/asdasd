<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir senha</title>
    <link rel="stylesheet" href="CSS\login-page.css">
    <script>
        function exibirMensagem() {
            alert("Email de redefinição de senha enviado com sucesso!");
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="form-signin">
            <form method="post" name="login_form" onsubmit="exibirMensagem()">
                <div class="logo">
                    <img src="IMG/logo.png" alt="logo" width="60%">
                </div>
                <p style='color: #666'>Insira seu CPF no campo abaixo</p>
                <div class="form-group">
                    <input oninput="CPF_format(this)" type="text" class="form-control" name="cpf" placeholder="CPF">
                </div>
                <button type="submit" class="btn-entrar">Redefinir</button>
            </form>
            <hr style="margin:5px auto; opacity: 0;">
            <hr style="width:50%;margin:5px auto; opacity: 0;">
        </div>
    </div>
</body>
</html>
