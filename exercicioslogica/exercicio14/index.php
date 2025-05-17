<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Informe as duas notas do aluno:</h2>
<form method="post">
    Nota 1: <input type="number" name="nota1"><br><br>
    Nota 2: <input type="number" name="nota2"><br><br>
    <input type="submit" value="Calcular Média">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = ($nota1 + $nota2) / 2;
    $conceito = "";
    $situacao = "";

    if ($media >= 9.0 && $media <= 10.0) {
        $conceito = "A";
        $situacao = "APROVADO";
    } elseif ($media >= 7.5 && $media < 9.0) {
        $conceito = "B";
        $situacao = "APROVADO";
    } elseif ($media >= 6.0 && $media < 7.5) {
        $conceito = "C";
        $situacao = "APROVADO";
    } elseif ($media >= 4.0 && $media < 6.0) {
        $conceito = "D";
        $situacao = "REPROVADO";
    } elseif ($media >= 0.0 && $media < 4.0) {
        $conceito = "E";
        $situacao = "REPROVADO";
    } else {
        echo "Notas inválidas! As notas devem estar entre 0 e 10.";
        exit;
    }

    echo "<h3>Resultado:</h3><br>";
    echo "Nota 1: $nota1 <br>";
    echo "Nota 2: $nota2 <br>";
    echo "Média: $media <br>";
    echo "Conceito: $conceito <br>";
    echo "Situação: $situacao";
}
?>

</body>
</html>
