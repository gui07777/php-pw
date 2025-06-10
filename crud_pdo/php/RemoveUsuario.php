<?php
require_once "conexao.php";

$email = $_POST['emailFormulario'];

if(!empty($email)) {

    $sql = "DELETE FROM usuario WHERE email = :email";

    // preparar a remoçao

    $requisicao = $conexao->prepare($sql);

    // vamos pegar o email digitado no form e passar por parametro,
    // isso fara com que a consulta na variavel $sql use o email que
    //  o usuario digitou, o bidiparam serve para evitar sqlinjection.
    //  é uma proteçao da aplicaçao no banco de dados

    $requisicao ->bindParam(':email', $email);

    try {
        $requisiçao->execute();
        if($requisicao->rowCount() > 0) {
            echo "O usuário foi removido!";
        }else{
            echo "Usuário não existe.";
        }
    }catch(PDOException $e) {
        echo "Erro ao remover:" . $e->getMessage();
    }


}else {
    echo "Digite um e-mail para remover o usuário";
}

?>