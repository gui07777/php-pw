<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Caixa eletrônico</h2>
    <form method="post">
        Quanto reais deseja sacar? (mínimo 10, máximo 600)<br>
        <input type="number" name="valor">
        <input type="submit" value="Sacar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $valor = $_POST["valor"];
        


        if ($valor > 9 && $valor < 601) {
            $nota1 = 1;
            $nota5 = 5;
            $nota10 = 10;
            $nota50 = 50;
            $nota100 = 100;
            $total = 0;

            while($valor > 99 && $valor < 601){
                $nota100++;
                break;
            }

            echo "valor retirado: $nota100";
        }

    }

    ?>
</body>

</html>