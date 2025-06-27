<?php

$requisicao = $_POST['requisicao'] ?? null;

if (!$requisicao) {
    echo "Nenhuma ação foi requisitada.";
    exit;
}

switch ($requisicao) {
    case 'Cadastrar':
        include '../Model/usuario/Cadastrar.php';
        break;

    case 'Confirmar':
        include '../Model/usuario/Atualizar.php';
        break;

    case 'Entrar':
        include '../Model/usuario/Consultar.php';
        break;

    case 'Excluir':
        include '../Model/usuario/Remover.php';
        break;

    default:
        echo "Não foi possível realizar a ação";
}

?>