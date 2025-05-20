<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Digite uma nota entre 0 e 10: <input type="number" name="nota">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        
        $nota = $_POST['nota'];
        
        while($nota < 0 || $nota > 10) {
            echo "nota inválida";
            return;
        } 
        echo "Você digitou a nota $nota";
}
    ?>
</body>
</html>