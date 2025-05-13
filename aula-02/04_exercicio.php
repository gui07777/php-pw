<?php 

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if($idade >= 18){
    echo "Olá $nome, vocÊ é adulto e possui $idade anos <br>";
}else{
    echo "Olá $nome, você é menor de idade e possui $idade anos <br>";
}

?>