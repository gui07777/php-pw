<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Base:<input type="number" name="base"><br><br>
        Expoente:<input type="number" name="expoente"><br><br>
        <input type="submit" value="enviar">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $base = $_POST["base"];
        $expoente = $_POST["expoente"];
        $result = 0;
    
        
            while($base && $expoente) {
                $result = $base ** $expoente;
                echo "$result";
                break;
            }
        }
    
    
    ?>
</body>
</html>