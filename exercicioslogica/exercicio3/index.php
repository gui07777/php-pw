<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Digite uma letra</h2>
    <form action="" method="POST">
        Letra: <input type="text" name="letter">
        <input type="submit" value="verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $letter = $_POST["letter"];

        if ($letter === "M" || $letter === "m") {
            echo "M - MASCULINO";
        } else if ($letter === "F" || $letter === "f") {
            echo "F - FEMININO";
        } else {
            echo "Inválido!!!";
        }
    }
    ?>
</body>

</html>