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
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];

        if ($n1 > $n2 && $n1 > $n3) {
            echo "o número $n1 é o maior";
        } else if ($n2 > $n1 && $n2 > $n3) {
            echo "o número $n2 é o maior";
        } else if($n3 > $n1 && $n3 > $n2) {
            echo "o número $n3 é o maior";
        } else {
            echo "indefinido para este programa";
        }
    }
    ?>

</body>

</html>