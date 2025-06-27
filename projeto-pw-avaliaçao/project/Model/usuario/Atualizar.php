<?php

require_once __DIR__ . "/../Conexao.php";

$email = trim($_POST['email'] ?? '');
$novaSenha = trim($_POST['newPassword'] ?? '');
$confirmacaoSenha = trim($_POST['repeatPassword'] ?? '');

// var_dump([
//     'email' => $email,
//     'novaSenha' => $novaSenha,
//     'confirmacaoSenha' => $confirmacaoSenha
// ]);
// exit;

if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($confirmacaoSenha) && !empty($novaSenha)) {

    if ($novaSenha !== $confirmacaoSenha) {
        echo "<p style='color:red;'>As duas senhas devem ser iguais!</p>";
        exit;
    }

    $verificaEmail = $conexaoBanco->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :email");
    $verificaEmail->bindParam(":email", $email);
    $verificaEmail->execute();
    $emailExiste = $verificaEmail->fetchColumn();

    if (!$emailExiste) {
        echo "<p style='color:red;'>Esse email não está cadastrado no sistema.</p>";
        exit;
    }

    $securityPassword = password_hash($novaSenha, PASSWORD_DEFAULT);
    $instrucaoSQL = "UPDATE usuarios SET senha = :senha WHERE email = :email";


    //bindParam -> "substitui parametros (marcador por valor da variavel)" 
    $requisicao = $conexaoBanco->prepare($instrucaoSQL);
    $requisicao->bindParam(":email", $email);
    $requisicao->bindParam(":senha", $securityPassword);

    try {
        $requisicao->execute();
        echo "<p style= 'color:green;' >Senha atualizada com sucesso!</p>";
    } catch (PDOException $e) {
        echo "<p style= 'color:red;' > Ops: Não foi possível atualizar a senha!.</p>" . $e->getMessage();
    }




} else {
    echo "<p style='color:red;'>Preencha todos os campos corretamente para atualizar a senha.</p>";
}


?>