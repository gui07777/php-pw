<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../css/tarefas/lista.css">
  <title>Minhas Tarefas</title>
</head>

<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
  header("Location: ../usuario/login.html");
  exit;
}

require_once '../../Model/Conexao.php';
require_once '../../Model/tarefas/TarefaModel.php';

$tarefas = listarTarefas($_SESSION['usuario_id']);
?>

<div class="container">
  <div class="top-bar">
  <h2>📋 Minhas Tarefas</h2>
  <a href="criar_lista.html">
    <button class="btn-nova">➕ Nova Tarefa</button>
  </a>
</div>

  
  <ul>
    <?php foreach ($tarefas as $tarefa): ?>
      <li>
        <div class="info">
          <strong><?= $tarefa['titulo'] ?></strong>
          <?= $tarefa['descricao'] ?>
        </div>
        
        <div class="actions">
          <form action="editar_lista.php" method="POST">
            <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
            <button type="submit" title="Editar">✏️</button>
          </form>
          <form action="../../Controller/TarefaController.php" method="POST">
            <input type="hidden" name="requisicao" value="deletar">
            <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
            <button type="submit" title="Excluir">🗑️</button>
          </form>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="sair-center">
  <a href="../../Model/usuario/LogoutUsuario.php">
    <button class="btn-sair">🚪 Sair</button>
  </a>
</div>


</html>