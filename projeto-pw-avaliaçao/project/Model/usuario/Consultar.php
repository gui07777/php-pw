<?php
require_once __DIR__ . "/../Conexao.php";
session_start();

$email = trim($_POST['email'] ?? '');
$senha = $_POST['password'] ?? '';

if (!empty($email) && !empty($senha)) {

    $consultaSQL = "SELECT * FROM usuarios WHERE email = :email";
    $requisicao = $conexaoBanco->prepare($consultaSQL);
    $requisicao->bindParam(":email", $email);

    try {
        $requisicao->execute();
        $user = $requisicao->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($senha, $user['senha'])) {
            
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_nome'] = $user['nome'];
            
            header("Location: /projeto-pw-avaliaçao/project/View/tarefas/lista.php");
            exit;
        } else {
            echo "<p style='color:red;'>Email ou senha inválidos!</p>";
        }
    } catch (PDOException $e) {
        echo "Ops: não foi possível consultar o usuário" . $e->getMessage();
    }

} else {
    echo "<p style:'color:red;'>Informe um email para realizar a consulta.</p>";
}

?>