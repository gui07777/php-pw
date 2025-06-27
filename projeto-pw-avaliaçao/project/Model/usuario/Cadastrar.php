<?php
require_once __DIR__ . "/../Conexao.php"; //import do arquivo que possui as informações de conexao com o banco de dados

$email = $_POST['email'];
$nome = $_POST['name'];
$senha = $_POST['password'];
$confirmacaoSenha = $_POST['repeatPassword'];


if (!empty($email) && !empty($nome) && !empty($senha) && !empty($confirmacaoSenha)) {


    if ($senha != $confirmacaoSenha) {
        echo '<p style="color:red;"> As senhas precisam ser iguais!</p>';
    } else {

        $senha === $confirmacaoSenha;
        //deixa a senha segura. Se alguem invade o banco ve senha fake (numeros e letras embralhados de forma aleatoria)
        $securityOfPassword = password_hash($senha, PASSWORD_DEFAULT);

        $comandoSQL = "INSERT INTO usuarios (email, nome, senha) VALUES (:email, :nome, :senha)";

        $requisicao = $conexaoBanco->prepare(query: $comandoSQL); //prepara a inserçao de dados no banco

        $requisicao->bindParam(':email', $email); //substitue marcador pelo conteudo da variavel
        $requisicao->bindParam(':nome', $nome);
        $requisicao->bindParam(':senha', $securityOfPassword);

        try {
            $requisicao->execute();

            session_start();
            $usuario_id = $conexaoBanco->lastInsertId();
            $_SESSION['usuario_id'] = $usuario_id;

            header("Location: /projeto-pw-avaliaçao/project/View/tarefas/lista.php");
            exit;

        } catch (PDOException $e) {
            echo 'Ops: erro ao cadastrar usuário!'
                . $e->getMessage()
            ;
        }
    }

} else {
    echo '<p style="color: red;">Campos obrigatórios!</p>';
}
?>