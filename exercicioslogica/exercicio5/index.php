<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Informe suas duas notas</h2>
    <form method="POST">
        <input type="number" name="primeiranota">
        <input type="number" name="segundanota">
        <input type="submit" value="verificar">
    </form>

<?php
    
    if($_SERVER ["REQUEST_METHOD"] === "POST") {
        
$primeiranota = $_POST["primeiranota"];
$segundanota = $_POST["segundanota"];
$media = ($primeiranota + $segundanota)/2;

if($media >= 7) {
    echo "APROVADO!";
} else if($media < 7){
    echo "REPROVADO!";
}else{
    echo "Aprovado com distinção";
}

}
    
    ?>
</body>
</html>