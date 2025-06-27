<?php

$host = 'localhost';
$nomeBanco = 'todolist';
$usuario = 'root';
$senha = '';

try {
    $conexaoBanco = new PDO(
        "mysql:host=$host;
        dbname=$nomeBanco;charset=UTF8",
        $usuario,
        $senha
    );

    $conexaoBanco->setAttribute(PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    // echo "Conexão realizada com sucesso!";

}catch(PDOException $e) {
    echo "ERRO:" . $e->getMessage();
}

?>