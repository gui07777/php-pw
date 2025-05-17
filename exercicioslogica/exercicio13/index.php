<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Informe um número de 1 a 7:</h2>
<form method="post">
    <input type="number" name="dia">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["dia"];

    if ($numero == 1) {
        echo "<p>1 - Domingo</p>";
    } elseif ($numero == 2) {
        echo "<p>2 - Segunda-feira</p>";
    } elseif ($numero == 3) {
        echo "<p>3 - Terça-feira</p>";
    } elseif ($numero == 4) {
        echo "<p>4 - Quarta-feira</p>";
    } elseif ($numero == 5) {
        echo "<p>5 - Quinta-feira</p>";
    } elseif ($numero == 6) {
        echo "<p>6 - Sexta-feira</p>";
    } elseif ($numero == 7) {
        echo "<p>7 - Sábado</p>";
    } else {
        echo "Valor inválido";
    }
}
?>

</body>
</html>
