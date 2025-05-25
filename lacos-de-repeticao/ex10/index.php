<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Número 1: <input type="number" name="n1"> <br>
        Número 2: <input type="number" name="n2">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $inicio;
        $fim;

        while ($n1 < $n2) {

            $inicio = $n1;
            $fim = $n2;

        }
        while ($n1 > $n2) {

            $inicio = $n2;
            $fim = $n1;

        }

        echo "Os números entre $n1 e $n2",
    }
    ?>
</body>

</html>