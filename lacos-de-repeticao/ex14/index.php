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
        Sexto número: <input type="number" name="n6"><br>
        Sétimo número: <input type="number" name="n7"><br>
        Oitavo número: <input type="number" name="n8"><br>
        Nono número: <input type="number" name="n9"><br>
        Décimo número: <input type="number" name="n10"><br>
        <input type="submit" value="confirmar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $n4 = $_POST["n4"];
        $n5 = $_POST["n5"];
        $n6 = $_POST["n6"];
        $n7 = $_POST["n7"];
        $n8 = $_POST["n8"];
        $n9 = $_POST["n9"];
        $n10 = $_POST["n10"];

        $mensagem ="";
        $armazena = 1;
        

        if($n1 && $n2 && $n3 && $n4 && $n5 && $n6 && $n7 && $n8 && $n9 && $n10) {

        while ($n1 % 2 == 0) {
            break;
        }
        while ($n2 % 2 == 0) {
            break;

        }
        while ($n3 % 2 == 0) {
            break;

        }
        while ($n4 % 2 == 0) {
            break;

        }
        while ($n5 % 2 == 0) {
            break;

        }
        while ($n6 % 2 == 0) {
            break;

        }
        while ($n7 % 2 == 0) {
            break;

        }
        while ($n8 % 2 == 0) {
            break;

        }
        while ($n9 % 2 == 0) {
            break;

        }
        while ($n10 % 2 == 0) {
            break;

        }
        echo"";             //travei
    }}
    ?>
</body>

</html>