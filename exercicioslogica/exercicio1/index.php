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
        <input type="submit" value="Enviar">
    </form>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

if($n1 > $n2){
    echo "$n1 é maior";
}
else if($n1 < $n2){
echo "$n2 é maior";
}else{
    echo "O dois números são iguais";
}}
?>

</body>
</html>
