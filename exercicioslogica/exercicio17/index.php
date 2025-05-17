<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Informe um ano para verificar se é bissexto:</h2>
<form method="post">
    Ano: <input type="number" name="ano" required>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ano = $_POST["ano"];

    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "$ano é um <strong>ano bissexto.";
    } else {
        echo "$ano não é um ano bissexto.";
    }
}
?>

</body>
</html>
