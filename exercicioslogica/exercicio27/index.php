<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h2>Compra de Frutas</h2>
    <form method="POST">
        Quantidade de morangos (kg): <input type="number" name="morangos"><br><br>
        Quantidade de maçãs (kg): <input type="number" name="macas"><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $kgMorangos = $_POST["morangos"];
        $kgMacas = $_POST["macas"];

        if ($kgMorangos <= 5) {
            $precoMorango = 2.50;
        } else {
            $precoMorango = 2.20;
        }

        if ($kgMacas <= 5) {
            $precoMaca = 1.80;
        } else {
            $precoMaca = 1.50;
        }

        $totalMorangos = $kgMorangos * $precoMorango;
        $totalMacas = $kgMacas * $precoMaca;
        $pesoTotal = $kgMorangos + $kgMacas;
        $valorTotal = $totalMorangos + $totalMacas;

        if ($pesoTotal > 8 || $valorTotal > 25) {
            $desconto = $valorTotal * 0.10;
            $valorTotal = $valorTotal - $desconto;
        }

        echo "<h3>Valor a pagar: R$ " . round($valorTotal, 2) . "</h3>";
    }
    ?>
</body>
</html>
