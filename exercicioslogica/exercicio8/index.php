<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Informe os preços de 3 produtos</h2>
    <form method="post">
        Produto 1 (R$): <input type="number" name="preco1" step="0.01" required><br><br>
        Produto 2 (R$): <input type="number" name="preco2" step="0.01" required><br><br>
        Produto 3 (R$): <input type="number" name="preco3" step="0.01" required><br><br>
        <input type="submit" value="Comparar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco1 = $_POST["preco1"];
        $preco2 = $_POST["preco2"];
        $preco3 = $_POST["preco3"];

        if ($preco1 <= $preco2 && $preco1 <= $preco3) {
            echo "<h3>Você deve comprar o Produto 1 (R$ $preco1).</h3>";
        } elseif ($preco2 <= $preco1 && $preco2 <= $preco3) {
            echo "<h3>Você deve comprar o Produto 2 (R$ $preco2).</h3>";
        } else {
            echo "<h3>Você deve comprar o Produto 3 (R$ $preco3).</h3>";
        }
    }
    ?>
</body>
</html>
