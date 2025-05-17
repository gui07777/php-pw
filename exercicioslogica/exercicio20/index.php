<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Digite as três notas do aluno:</h2>
<form method="post">
    Nota 1: <input type="number" name="n1"><br><br>
    Nota 2: <input type="number" name="n2"><br><br>
    Nota 3: <input type="number" name="n3"><br><br>
    <input type="submit" value="Calcular Média">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Média: $media<br>";

    if ($media == 10) {
        echo "Aprovado com Distinção";
    } else if ($media >= 7) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }
}
?>

</body>
</html>
