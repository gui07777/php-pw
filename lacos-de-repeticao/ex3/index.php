<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Nome: <input type="text" name="nome" minlength="3"> <br>
        Idade: <input type="number" name="idade"><br>
        Salário: <input type="number" name="salario"><br>
        Sexo: <input type="text" name="sexo"><br>
        Estado civil: <input type="text" name="estadocivil"><br>
        <input type="submit" value="confirmar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $salario = $_POST["salario"];
        $qualsexo = $_POST["sexo"];
        $qualestadocivil = $_POST["estadocivil"];

        $sexo = false;
        $estadocivil = false;

        if ($qualsexo = "m" || $qualsexo = "f") {
            $sexo = true;
        }

        if ($qualestadocivil = "s" || $qualestadocivil = "c" || $qualestadocivil = "v" || $qualestadocivil = "d") {
            $estadocivil = true;
        }

        while (strlen($nome) > 3 && $idade < 150 && $salario > 0 && $sexo = true && $estadocivil = true) {
            echo "Informações validadas com sucesso";
            break;
        }
    }              //caraca nem acredito que deu certo kaakkakkk

    //strlen eu tive que pesquisar porque minlength nao tava funcionando pra essa logica que eu tava pensando

    ?>
</body>

</html>