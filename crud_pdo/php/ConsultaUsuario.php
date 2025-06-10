<?php 

require_once "conexao.php";

$email = $_POST['emailFormulario'];

if(!empty($email)) {

    $sql = "SELECT * FROM usuarios WHERE email = :email";

    $requisicao = $conexao->prepare($sql);

    $requisicao->bindParam(':email', $email);


    try {
        $requisicao->execute();

        // Especificar como queremos o retonro da consulta no banco de dado
        // FETCH_ASSOC indica que queremos retornar um array indexado

        $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);


        if($usuario){
            echo "Nome:" .$usuario['nome'] . "<br>";
            echo "Email:" .$email['email'] . "<br>";
        }else{
            echo "Usuário não encontrado ou não existe";
        }
    }catch(PDOException $e) {
        echo "erro ao consultar usuário:" . $e->getMessage();
    }
} else {
    "Digite um email para realizar a consulta";
}


?>