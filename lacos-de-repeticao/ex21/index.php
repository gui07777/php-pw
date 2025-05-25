<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Digite um número: <input type="number" name="number" required>
        <input type="submit" value="Confirmar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $number = ($_POST["number"]);
        
       while($number % 2 == 0 && ) {
echo "";
       }
    }
    ?>
</body>
</html>