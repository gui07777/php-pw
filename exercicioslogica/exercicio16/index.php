<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Equação do 2° grau</h2>
    <form method="post">
      Valor de A:  <input type="number" name="valorA"> <br><br>
      Valor de B: <input type="number" name="valorB"><br><br>
      Valor de C:  <input type="number" name="valorC"><br><br>
      <input type="submit" value="Calcular">
    </form>

    <?php
    
    if($_SERVER["METHOD_REQUEST"] === "POST") {

$valorA = $_POST["valorA"];
$valorB = $_POST["valorB"];
$valorC = $_POST["valorC"];
$delta = ($valorB * $valorB) - (4 * $valorA * $valorC);
$resultado;

if($valorA = 0) {
    echo "A equação não é do segundo grau pois A = $valorA.";
    exit();
}
if($delta < 0) {
    echo "A equação não possui raízes reais pois Delta = $delta (negativo).";
    exit();
}
else if($delta = 0) {
    $resultado = - $valorB;
    echo "A equação possui apenas uma raiz real que é $primeiraraiz";
}
else if($delta > 0) {
    echo "A equação possui duas raízes reais que são $primeiraraiz e $segundaraiz";
}
}
    
//* a fórmula para tirar a raiz é x = -b +- raiz de delta dividido por 2.a*//



    ?>
</body>
</html>

