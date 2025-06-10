<?php
$requisicao = $_POST['requisicao'];

switch ($requisicao) {
    case 'Atualizar':
        include 'AtualizarUsuario.php';
        break;

    case 'Remover':
        include 'RemoveUsuario.php';
        break;

    case 'Consultar':
        include "ConsultaUsuario.php";
        break;

    case 'Cadastrar';
        include "CadastroUsuario.php";
        break;

    default:
        echo "Ação inválida";
}
?>