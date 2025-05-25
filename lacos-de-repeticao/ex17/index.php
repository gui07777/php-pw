<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Digite um número: <input type="number" name="number">
        <input type="submit" value="confirmar">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $number = $_POST["number"];
        $result = 1;
        $original = $number;

        while ($number > 1) {
            $result *= $number;
            $number--;
        }
        echo "$original! = $result  ";
    }
    ?>
</body>
</html>