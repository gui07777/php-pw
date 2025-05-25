<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Primeiro Número <input type="number" name="n1"><br><br>
        Segundo Número <input type="number" name="n2"><br><br>
        Terceiro Número <input type="number" name="n3"><br><br>
        <input type="submit" value="comparar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $numero1 = $_POST["n1"];
        $numero2 = $_POST["n2"];
        $numero3 = $_POST["n3"];

        $soma = $numero1 + $numero2 + $numero3;

        while ($numero1 > $numero2 && $numero1 > $numero3) {
            if ($numero3 > $numero2) {
                echo "Maior: $numero1: <br> Menor: $numero3 <br> $soma";
                break;
            } else {
                echo "Maior: $numero1: <br> Menor: $numero2 <br> $soma";
                break;
            }
        }
        while ($numero2 > $numero1 && $numero2 > $numero3) {
            if ($numero3 > $numero1) {
                echo "Maior: $numero2: <br> Menor: $numero1 <br> $soma";
                break;
            } else {
                echo "Maior: $numero2: <br> Menor: $numero3 <br> $soma";
                break;
            }
        }
        while ($numero3 > $numero1 && $numero3 > $numero2) {
            if ($numero2 > $numero1) {
                echo "Maior: $numero3: <br> Menor: $numero1 <br> $soma";
                break;
            } else {
                echo "Maior: $numero3: <br> Menor: $numero2 <br> $soma";
                break;
            }
        }
    }
    ?>
</body>

</html>