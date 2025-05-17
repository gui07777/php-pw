<!DOCTYPE html>
<html>

<head>
    <title>Formulário</title>
</head>

<body>
    <h2>Digite dois números</h2>
    <form action="" method="POST">
        Primeiro Número: <input type="number" name="n1"> <br>
        Segundo Número: <input type="number" name="n2"> <br>
        Digite o sinal da operação (+, -, * ou /): <input type="text" name="resposta">
        <input type="submit" value="Enviar">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $resposta = $_POST["resposta"];
        $decimalreal = "";
        $parimpar = "";
        $positivonegativo = "";

        if ($resposta === "+") {
            $resultado = $n1 + $n2;
        }
     else if ($resposta === "-") {
        $resultado = $n1 - $n2;
    } else if ($resposta === "*") {
        $resultado = $n1 * $n2;
    } else if ($resposta === "/") {
        $resultado = $n1 / $n2;
    } else {
        echo "<h2> não fui programado para isso ;-; </h2>";
        exit();
    }

    if($resultado == intval($resultado)) {
        $decimalreal = "Inteiro";
    }else{
        $decimalreal = "Real";
    }
    if ($resultado % 2 === 0) {
        $parimpar = "Par"; 
    }else{
        $parimpar = "Ímpar";
    }
    if($resultado < 0) {
        $positivonegativo = "Negativo";
    }else{
        $positivonegativo = "Positivo";
    }

    echo "O reultado é $resultado, $parimpar, $positivonegativo e $decimalreal";
}
    ?>

</body>

</html>