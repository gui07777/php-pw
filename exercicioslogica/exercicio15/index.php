<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Informe os três lados do triângulo:</h2>
<form method="post">
    Lado 1: <input type="number" name="lado1" step="0.01" required><br><br>
    Lado 2: <input type="number" name="lado2" step="0.01" required><br><br>
    Lado 3: <input type="number" name="lado3" step="0.01" required><br><br>
    <input type="submit" value="Verificar Triângulo">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $lado3 = $_POST["lado3"];

    if (
        $lado1 + $lado2 > $lado3 &&
        $lado1 + $lado3 > $lado2 &&
        $lado2 + $lado3 > $lado1
    ) {
        echo "Os lados informados podem formar um triângulo.";

        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "Tipo: Equilátero (todos os lados iguais).";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "Tipo: Isósceles (dois lados iguais).";
        } else {
            echo "Tipo: Escaleno (todos os lados diferentes).";
        }

    } else {
        echo "Os valores informados não formam um triângulo.";
    }
}
?>

</body>
</html>
