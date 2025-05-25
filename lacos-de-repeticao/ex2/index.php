<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Usuário: <input type="text" name="user"><br>
        Senha: <input type="text" name="password">
        <input type="submit" value="confirmar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $user = $_POST["user"];
        $password = $_POST["password"];

        while ($user == $password) {
            echo "Erro! Tente novamente...";
            break;
        }
            if ($user !== $password) {
                echo "Bem vindo!";
            }
        }
    

    ?>
</body>

</html>