<!DOCTYPE html>
<html>

<head>
    <title>Formulário</title>
</head>

<body>
    <h2>Digite dois números</h2>
    <form action="" method="POST">
        Primeiro Número: <input type="number" name="n1" required> <br>
        Segundo Número: <input type="number" name="n2" required> <br>
        Terceiro Número: <input type="number" name="n3" required> <br>

        <input type="submit" value="Enviar">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["n1"];
        $num2 = $_POST["n2"];
        $num3 = $_POST["n3"];

       if ($num1 >= $num2 && $num1 >= $num3) {
            $maior = $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            $maior = $num2;
        } else {
            $maior = $num3;
        }

        if ($num1 <= $num2 && $num1 <= $num3) {
            $menor = $num1;
        } elseif ($num2 <= $num1 && $num2 <= $num3) {
            $menor = $num2;
        } else {
            $menor = $num3;
        }

        echo "<h3>Resultados:</h3>";
        echo "Maior número: $maior <br>";
        echo "Menor número: $menor";
    }
    ?>

</body>

</html>