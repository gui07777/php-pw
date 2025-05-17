<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Interrogatório, por favor, responda:</h2>
    <form method="post">
        Telefonou para a vítima? <br><input type="text" name="question1"> <br><br>
        Esteve no local do crime? <br><input type="text" name="question2"> <br><br>
        Mora perto da vítima? <br><input type="text" name="question3"> <br><br>
        Devia para a vítima? <br><input type="text" name="question4"> <br><br>
        Já trabalhou com a vítima? <br><input type="text" name="question5"> <br><br>
        <input type="submit" value="Analisar situação">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $question1 = $_POST["question1"];
        $question2 = $_POST["question2"];
        $question3 = $_POST["question3"];
        $question4 = $_POST["question4"];
        $question5 = $_POST["question5"];

        $soma = 0;

        if ($question1 = "sim") {
            $soma = $soma + 1;
        } else {
            $soma = $soma + 0;
        }
        if ($question2 = "sim") {
            $soma = $soma + 1;
        } else {
            $soma = $soma + 0;
        }
        if ($question3 = "sim") {
            $soma = $soma + 1;
        } else {
            $soma = $soma + 0;
        }
        if ($question4 = "sim") {
            $soma = $soma + 1;
        } else {
            $soma = $soma + 0;
        }
        if ($question5 = "sim") {
            $soma = $soma + 1;
        } else {
            $soma = $soma + 0;
        }

        if ($soma === 2) {
            echo "Suspeita";
        }
        else if ($soma > 3 && $soma < 4) {
            echo "Cúmplice";
        }
        else if ($soma === 5) {
            echo "Assassino"; 
        }else{
            echo "Inocente";
    }
    }
    ?>
</body>

</html>