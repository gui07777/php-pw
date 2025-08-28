<?php
session_start();
require 'Contato.class.php';

if(isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conecta = $contato =  new Contato();

    if($conecta) {
        $chkUser = $contato->checkUser($email);

        if(!empty($chkUser)) {
            $chkPass = $contato->checkPass($email, $senha);
            $_SESSION['nome'] = $chkPass['nome'];
            header("location:index.php");
        } else {
            echo "Login ou senha incorretos!";
        }
    }
}
?>

<!DOCTYPE html>
<head>
    <script src="js/acesso.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login 3</title>
</head>
<body>
    <div class = "topo verde">
        <div class = "data verde borda">
            <script>
                var data = new Date();
                var dias = data.getDay();
                var mes = data.getMonth();
                var ano = data.getFullYear();
                var meses = new Array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
                var diaSemana = new Array (
                    'Domingo', 'Segunda Feira', 'Terça Feira', 'Quarta Feira', 'Quinta Feira', 'Sexta Feira', 'Sábado'
                );
                var hoje = data.getDate();
                var hora = data.getHours();
                var min = data.getMinutes();
                var sec = data.getSeconds();
                var strHora = hora + ":" + min + ':' + sec;
                var strData = diaSemana[dias] + ", " + hoje + " de ";
                + meses[mes] + " de " + ano + ", " + strHora 
                document.write(strData);
            </script>
        </div>
        <spam class="fonte">Logomarca</spam>
    </div>
    <div class="centraliza">
        <div class="formulario interna ">
            <form class="form" method="post">
                Nome: <br>
                <input type="text" name="nome" class="i1"> <br> <br>
                Email: <br>
                <input type="text" name="email" class="i1"> <br> <br>
                Senha: <br>
                <input type="text" name="senha" class="i1"> <br> <br>

                <p><a href="forgotpass.html" class="esqueceu">Esqueceu a senha?</a></p>
                <input type="submit" name="botao" value="Enviar" class="centralizar">
            </form>
        </div>
    </div>
</body>
</html>