<?php
session_start();
require_once '../Model/Conexao.php';
require_once '../Model/tarefas/TarefaModel.php';


$acao = $_POST['requisicao'] ?? '';

switch ($acao) {
    case 'criar':
        inserirTarefa($_POST['titulo'], $_POST['descricao'], $_SESSION['usuario_id']);
        header('Location: ../View/tarefas/lista.php');
        break;

    case 'editar':
        atualizarTarefa($_POST['id'], $_POST['titulo'], $_POST['descricao']);
        header('Location: ../View/tarefas/lista.php');
        break;

    case 'deletar':
        deletarTarefa($_POST['id']);
        header('Location: ../View/tarefas/lista.php');
        break;

    default:
        echo "Ação inválida.";
}
?>
