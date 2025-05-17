<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h2>Veja aqui seu salário com o reajuste</h2>
    <form method="post">
        Informe o seu salário atual:
        <input type="number" name="salarioatual" maxlength="1" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $salarioatual = $_POST["salarioatual"];
        $aumento;
        $novosalario;
        $percentual;

        if ($salarioatual <= 280) {
            $percentual = 20;
            $aumento = $salarioatual * ($percentual/100);
            $novosalario = $salarioatual + $aumento;
        } else if ($salarioatual > 280 && $salarioatual < 701) {
            $percentual = 15;
            $aumento = $salarioatual * ($percentual/100);
            $novosalario = $salarioatual + $aumento;
        } else if ($salarioatual > 700 && $salarioatual < 1501) {
            $percentual = 10;
            $aumento = $salarioatual * ($percentual/100);
            $novosalario = $salarioatual + $aumento;
        } else if ($salarioatual > 1500) {
            $percentual = 5;
            $aumento = $salarioatual * ($percentual/100);
            $novosalario = $salarioatual + $aumento;
        } else {
            echo "inválido";
        }
        echo "O salário antes do reajuste era $salarioatual. <br>";
        echo "O percentual de aumento aplicado é $percentual. <br>"; 
        echo "O valor aumentado foi $aumento. <br>"; 
        echo "O novo salário é $novosalario. <br>";
    }




    ?>
</body>

</html>