<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../css/tarefas/editar_lista.css">
  <title>Atualizar Tarefas</title>
</head>

<body>

  <div class="container">
    <?php
    require_once '../../Model/Conexao.php';
    require_once '../../Model/tarefas/TarefaModel.php';

    $id = $_POST['id'] ?? null;
    $tarefa = buscarTarefa($id);
    ?>

    <h2>✏️ Editar Tarefa</h2>

    <form action="../../Controller/TarefaController.php" method="POST">
      <input type="hidden" name="requisicao" value="editar" />
      <input type="hidden" name="id" value="<?= $tarefa['id'] ?>" />

      <label for="titulo">Título:</label>
      <input type="text" name="titulo" id="titulo" value="<?= $tarefa['titulo'] ?>" required>

      <label for="descricao">Descrição:</label>
      <textarea name="descricao" id="descricao" rows="5" required><?= $tarefa['descricao'] ?></textarea>

      <button type="submit">Atualizar</button>
    </form>

    <a href="lista.php">← Voltar para a lista</a>
  </div>

</body>

</html>