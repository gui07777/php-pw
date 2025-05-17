<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Digite um número:</h2>
<form method="post">
    Número: <input type="text" name="numero"><br><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["numero"];

    $numFloat = floatval($numero);

    if ($numFloat == round($numFloat)) {
        echo "O número $numero é inteiro.";
    } else {
        echo "O número $numero é decimal.";
    }
}
?>

</body>
</html>
