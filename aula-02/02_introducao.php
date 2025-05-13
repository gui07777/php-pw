<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução - PHP</title>
</head>
<body>
    <?php
    //código php precisa estar dentro da tag
    $nome = "Guilherme";
    $idade = 18;
    $altura = 1.73;
    $isAluno = false;

    //escreve na tela
    echo $nome;

    $texto = "boa noite,";
    
    $Texto = "como vai voce?";

    echo "$texto $Texto";

    //imprimir para o usuario: meu nome é xxxxxx

    echo"meu nome é $nome";

    echo "<br> pulando linha <br> linha quebrada";

    echo "<br><br><br><hr>";

    echo "<br> nome: $nome  <br> idade: $idade <br> altura: $altura";

    echo "<br><br><br><hr>";



    ?>
</body>
</html>