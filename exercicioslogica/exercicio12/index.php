<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Folha de pagamento</h1>
    <form method="post">
    Informe o valor que ganha por hora:<br> <input type="number" name="value"> <br>
    Informe a quantidade de horas trabalhadas no mês:<br><input type="number" name="hours"><br><br>
    <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {

$hoursValue = $_POST["hours"];
$workHours = $_POST["value"];
$salarioBruto = $workHours * $hoursValue;
$descontoSindicato = $salarioBruto * (3/100);
$percentIR = 0;
$descontoIR;
$FGTS = $salarioBruto * 0.08;
$salarioLiquido;

if($salarioBruto < 1501) {
    $percentIR = 7.5;
    $descontoIR = $salarioBruto * ($percentIR/100);
    $salarioLiquido = $salarioBruto - $descontoSindicato - $descontoIR;
}else if($salarioBruto > 1500 && $salarioBruto < 2501) {
    $percentIR = 15;
    $descontoIR = $salarioBruto * ($percentIR/100);
    $salarioLiquido = $salarioBruto - $descontoSindicato - $descontoIR;
}else if($salarioBruto > 2500) {
    $percentIR = 27.5;
    $descontoIR = $salarioBruto * ($percentIR/100);
    $salarioLiquido = $salarioBruto - $descontoSindicato - $descontoIR;
}else{
    echo "indefinido";
}

echo "O salario bruto é $salarioBruto reais.<br>";
echo "As horas trabalhadas foram $workHours horas.<br>";
echo "O valor correspondente ao FGTS depositado pela empresa foi $FGTS reais.<br>";
echo "O percentual do imposto de renda descontado foi $percentIR% resultando em $descontoIR reais a menos.<br>";
echo "O salário líquido total é $salarioLiquido reais.";
    }
    ?>
</body>
</html>