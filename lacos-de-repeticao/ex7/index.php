<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Primeiro número: <input type="number" name="n1"> <br>
        Segundo número: <input type="number" name="n2"><br>
        Terceiro número: <input type="number" name="n3"><br>
        Quarto número: <input type="number" name="n4"><br>
        Quinto número: <input type="number" name="n5"><br>
        <input type="submit" value="confirmar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $n4 = $_POST["n4"];
        $n5 = $_POST["n5"];

        $maior = 0;

        while ($n1 > $n2 && $n1 > $n3 && $n1 > $n4 && $n1 > $n5) {
            $maior = $n1;
            echo "Maior: $maior <br>";
            break;
        }
        while ($n2 > $n1 && $n2 > $n3 && $n2 > $n4 && $n2 > $n5) {
            $maior = $n2;
            echo "Maior: $maior <br>";
            break;

        }
        while ($n3 > $n1 && $n3 > $n2 && $n3 > $n4 && $n3 > $n5) {
            $maior = $n3;
            echo "Maior $maior <br>";
            break;

        }
        while ($n4 > $n1 && $n4 > $n2 && $n4 > $n3 && $n4 > $n5) {
            $maior = $n4;
            echo "Maior $maior <br>";
            break;

        }
        while ($n5 > $n1 && $n5 > $n2 && $n5 > $n3 && $n5 > $n4) {
            $maior = $n5;
            echo "Maior: $maior <br>";
            break;

        }
    }
    ?>
</body>

</html>