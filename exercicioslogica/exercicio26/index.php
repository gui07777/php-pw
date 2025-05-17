<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h2>Calcular valor a pagar</h2>
    <form method="POST">
        Quantos litros foram comprados?<br>
        <input type="number" name="litros" step="0.1" required><br><br>

        Tipo de combustível (A para Álcool, G para Gasolina):<br>
        <input type="text" name="tipo" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $litros = $_POST["litros"];
        $tipo = $_POST["tipo"];

        if ($tipo == "a") {
            $tipo = "A";
        } else if ($tipo == "g") {
            $tipo = "G";
        }

        $precoLitro = 0;
        $desconto = 0;

        if ($tipo == "A") {
            $precoLitro = 3.90;

            if ($litros <= 20) {
                $desconto = 0.03;
            } else {
                $desconto = 0.05;
            }

        } else if ($tipo == "G") {
            $precoLitro = 5.50;

            if ($litros <= 20) {
                $desconto = 0.04;
            } else {
                $desconto = 0.06;
            }

        } else {
            echo "<h3>Tipo de combustível inválido. Use A para Álcool ou G para Gasolina.</h3>";
            exit();
        }

        $valorSemDesconto = $litros * $precoLitro;
        $valorDesconto = $valorSemDesconto * $desconto;
        $valorFinal = $valorSemDesconto - $valorDesconto;

        echo "<h3>Valor a pagar: R$  $valorFinal . </h3>";
    }
    ?>
</body>
</html>
