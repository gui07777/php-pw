<?php 

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];
$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;


if($media >= 9 && $media <= 10){
    echo "Olá $nome, e sua média é $media: MB <br>";
}
else if($media >= 7 && $media <= 8){
    echo "Olá $nome, e sua média é $media: B <br>";
}
else if($media >= 5 && $media < 7){
    echo "Olá $nome, e sua média é $media: R <br>";
}
else if($media >= 0 && $media < 5){
    echo "Olá $nome, e sua média é $media: I <br>";
}
else{
    echo "Média indefinida";
}

?>