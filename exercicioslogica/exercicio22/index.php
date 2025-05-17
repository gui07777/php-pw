<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Digite um número inteiro:</h2>
<form method="post">
    Número: <input type="number" name="numero"><br><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "O número $numero é par.";
    } else {
        echo "O número $numero é ímpar.";
    }
}
?>

</body>
</html>
