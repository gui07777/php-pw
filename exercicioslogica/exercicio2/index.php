<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Digite um número</h2>
    <form action="" method="POST">
        <input type="number" name="number">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $number = $_POST["number"];

        if($number > 0){
            echo "O número $number é positivo";
        }else if($number < 0){
            echo "O número $number é negativo";
        }else{
            echo "zero é zero";
        }
    }
    
    ?>

</body>

</html>