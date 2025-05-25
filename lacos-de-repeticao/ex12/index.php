<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Digite um número entre 1 e 10: <input type="number" name="number">
        <input type="submit" value="enviar">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $number = $_POST["number"];
    
        if($number > 10 || $number < 1) {
            echo "oops ;-;";
            exit();
        }
        
        else {
            for($i = 0; $i <= 10; $i++) {
                $result = $number * $i;
                echo "$number x $i = $result <br>";
            }
        }
    }
    
    ?>
</body>
</html>