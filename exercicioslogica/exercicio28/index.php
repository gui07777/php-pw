<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h2>Hipermercado Tabajara - Promoção de Carnes</h2>
    <form method="POST">
        Tipo de carne:
        <select name="carne" required>
            <option value="file">Filé Duplo</option>
            <option value="alcatra">Alcatra</option>
            <option value="picanha">Picanha</option>
        </select><br><br>

        Quantidade (kg): <input type="number" name="quantidade" step="0.1" required><br><br>

        Forma de pagamento:
        <select name="pagamento" required>
            <option value="tabajara">Cartão Tabajara</option>
            <option value="outro">Outro</option>
        </select><br><br>

        <input type="submit" value="Gerar Cupom">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $tipo = $_POST["carne"];
        $kg = $_POST["quantidade"];
        $pagamento = $_POST["pagamento"];
        $precoKg = 0;
        $nomeCarne = "";

        if ($tipo === "file") {
            $nomeCarne = "Filé Duplo";
            if ($kg <= 5) {
                $precoKg = 4.90;
            } else {
                $precoKg = 5.80;
            }
        } else if ($tipo === "alcatra") {
            $nomeCarne = "Alcatra";
            if ($kg <= 5) {
                $precoKg = 5.90;
            } else {
                $precoKg = 6.80;
            }
        } else if ($tipo === "picanha") {
            $nomeCarne = "Picanha";
            if ($kg <= 5) {
                $precoKg = 6.90;
            } else {
                $precoKg = 7.80;
            }
        }

        $total = $kg * $precoKg;

        if ($pagamento === "tabajara") {
            $desconto = $total * 0.05;
            $final = $total - $desconto;
            $formaPagamento = "Cartão Tabajara";
        } else {
            $desconto = 0;
            $final = $total;
            $formaPagamento = "Outro";
        }

        echo "<hr>";
        echo "<h3>Cupom Fiscal</h3>";
        echo "Tipo de carne: $nomeCarne<br>";
        echo "Quantidade: $kg Kg<br>";
        echo "Preço total: R$ " . number_format($total, 2, ',', '.') . "<br>";
        echo "Tipo de pagamento: $formaPagamento<br>";
        echo "Valor do desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
        echo "<strong>Valor a pagar: R$ " . number_format($final, 2, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>
