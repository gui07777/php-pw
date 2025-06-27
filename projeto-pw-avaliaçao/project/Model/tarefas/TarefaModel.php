<?php
function inserirTarefa($titulo, $descricao, $usuarioId) {
    global $conexaoBanco;
    $sql = "INSERT INTO tarefas (titulo, descricao, usuario_id) VALUES (:titulo, :descricao, :usuario_id)";
    $stmt = $conexaoBanco->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':usuario_id', $usuarioId);
    $stmt->execute();
}

function listarTarefas($usuarioId) {
    global $conexaoBanco;
    $sql = "SELECT * FROM tarefas WHERE usuario_id = :usuario_id";
    $stmt = $conexaoBanco->prepare($sql);
    $stmt->bindParam(':usuario_id', $usuarioId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarTarefa($id) {
    global $conexaoBanco;
    $sql = "SELECT * FROM tarefas WHERE id = :id";
    $stmt = $conexaoBanco->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarTarefa($id, $titulo, $descricao) {
    global $conexaoBanco;
    $sql = "UPDATE tarefas SET titulo = :titulo, descricao = :descricao WHERE id = :id";
    $stmt = $conexaoBanco->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function deletarTarefa($id) {
    global $conexaoBanco;
    $sql = "DELETE FROM tarefas WHERE id = :id";
    $stmt = $conexaoBanco->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
?>
