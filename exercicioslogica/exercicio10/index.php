<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Em que turno você estuda?</h2>
    <form method="post">
        Digite:<br>
        M - Matutino<br>
        V - Vespertino<br>
        N - Noturno<br><br>
        <input type="text" name="turno" maxlength="1" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $turno = strtoupper(trim($_POST["turno"]));

        echo "<h3>Resultado:</h3>";

        if ($turno == "M") {
            echo "Bom dia! Você estuda no turno **Matutino**.";
        } elseif ($turno == "V") {
            echo "Boa tarde! Você estuda no turno **Vespertino**.";
        } elseif ($turno == "N") {
            echo "Boa noite! Você estuda no turno **Noturno**.";
        } else {
            echo "**Valor inválido!** Por favor, digite apenas M, V ou N.";
        }
    }
    ?>
</body>
</html>
