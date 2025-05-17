<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Digite 3 números</h2>
    <form method="post">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        Número 3: <input type="number" name="num3" required><br><br>
        <input type="submit" value="Ordenar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["num1"];
        $b = $_POST["num2"];
        $c = $_POST["num3"];

        if ($a >= $b && $a >= $c) {
            if ($b >= $c) {
                echo "<h3>Ordem: $a, $b, $c</h3>";
            } else {
                echo "<h3>Ordem: $a, $c, $b</h3>";
            }
        } elseif ($b >= $a && $b >= $c) {
            if ($a >= $c) {
                echo "<h3>Ordem: $b, $a, $c</h3>";
            } else {
                echo "<h3>Ordem: $b, $c, $a</h3>";
            }
        } else {
            if ($a >= $b) {
                echo "<h3>Ordem: $c, $a, $b</h3>";
            } else {
                echo "<h3>Ordem: $c, $b, $a</h3>";
            }
        }
    }
    ?>
</body>
</html>
