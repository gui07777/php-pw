<?php
//declarando as vaiáveis que vamos utilizar na conexão
$host = 'localhost';
$nomeBanco = 'crud_pdo';
$usuario = 'root';
$senha = '';

// criar um novo objeto que conecta no banco de dados
// vamos utilizar o pdo para isso, passando as variaveis acima como parametro

try {

    $conexao = new PDO(
        "mysql:host=$host;
        dbname=$nomeBanco;charset=UTF8",
        $usuario,
        $senha
    );

    //define como o pdo vai tratar o erro
    //no caso, vai lançar a exceção, que posteriormente será tratada no CATCH
    $conexao->setAttribute(PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com êxito! <br><hr><br>";

}catch(PDOException $e) {
echo "ERRO:" . $e->getMessage();
}

?>