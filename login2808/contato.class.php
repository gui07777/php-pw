<?php

class Contato{
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function __construct() {
        $dns = "mysql:dbname=contato;host=localhost";
        $dbUser = "root";
        $dbPass = "";
        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
        } catch (Exception $e) {
            echo "<script>alert('Não consegui me conectar. Tente mais tarde!')</script>";
            exit;
        }
    }

    function getNome() {
        return $this->nome;
    }
    function getEmail() {

    }

    function checkUser($email) {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":email", $email);

        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}

?>