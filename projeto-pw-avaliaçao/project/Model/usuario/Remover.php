<?php

require_once __DIR__ . "/../Conexao.php";

$email = $_POST['email'];
$senha = $_POST['password'];

if (!empty($email) && !empty($senha)) { //se campo do email nao estiver vazio

    $consultaSQL = "SELECT senha FROM usuarios WHERE :email = email";

    $requisicao = $conexaoBanco->prepare($consultaSQL);

    $requisicao->bindParam(':email', $email);

    try {
        $requisicao->execute();
        $user = $requisicao->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {

            $sql = "DELETE FROM usuarios WHERE email = :email"; //passa o marcador chamado email primeiro, depois passa o valor pra evitar sqlinjection (ataque)

            $delete = $conexaoBanco->prepare($sql); //prepara esse sql antes de colocar os dados para evitar codigos maliciosos entre os valores

            $delete->bindParam(':email', $email); //agora sim, depois de preparar, quero que você substitua o marcador :email do $sql pelo valor que está na variável $email


            $delete->execute();
            if ($delete->rowCount() > 0) {
                echo "O usuário foi removido!";
            } else {
                echo "Usuário não existe.";
            }

        } else {
            echo "Usuário ou senha inválidos!";
        }
    } catch (PDOException $e) {
        echo "senha não encontrada no banco" . $e->getMessage();
    }


} else {
    echo "Digite o email e a senha do seu usuário para removê-lo.";
}


?>