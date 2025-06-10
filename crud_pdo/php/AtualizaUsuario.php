<?php

require_once "conexao.php";

$nome = $_POST['nomeFormularip'];
$email = $_POST['emailFormulario'];
$novaSenha = $_POST['senhaFormulario'];


if (!empty($nome) && !empty($email)) {

    // se ele quiser atualizar a senha
    if (!empty($novaSenha)) {
        $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET nome = :nome, senha = :senha WHERE email = :email";
    } else {
        $sql = "UPDATE usuarios SET nome = :nome WHERE email = :email";
    }
    $requisicao = $conexao->prepare($sql);
    $requisicao->bindParam(":nome", $nome);
    $requisicao->bindParam(":email", $email);

    if (!empty($novaSenhaha)) {
        $requisicao->bindParam(":senha", $senhaHash);
    }

    try {

    } catch (PDOException $e) {
        echo "erro ao atualizar:" . $e->getMessage();
    }
} else {
    echo "Preencha o nome e email para atualizar";

}

?>