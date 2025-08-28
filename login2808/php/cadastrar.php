<?php
session_start();
require 'Contato.class.php';

if(isset($_POST['email']) && !empty($_POST['email'])){
	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$conecta = $contato = new Contato();
	
	if($conecta){
		$chkInsert = $contato->insertUser($nome,$email, $senha);

		if($chkInsert){
			?>
            <script>
                alert("Usuario inserido com sucesso!");
            </script>    
            <?php
		}else{
			?>
            <script>
                alert("Nao consegui inserir o usuario! Tente mais tarde.");
            </script>  
            <?php 
		}
	}
}

?>

<!DOCTYPE html>
<head>
	<script src="../js/acesso.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>Login 3</title>
</head>
<body>	
	<div class = "topo verde">	
		<div class = "data verde borda" >
			<script>
				acesso();
			</script>	
		</div>
		<spam class="fonte">Logomarca
	</div>	
	<div class="centraliza">
		<div class = "formulario interna ">
			<form class = "form" method="post">
				Nome:<br>
				<input type="text" name="nome" class="i1"><br><br>
				Email:<br>
				<input type="text" name="email" class="i1"><br><br>
				Senha:<br> 
				<input type="password" name="senha" class="i1"><br><br>

				<input type="submit" name="botao" value="Cadastrar Novo Usuario" class = "centralizaBotao">
			</form>
		</div>
	</div>
</body>
</html>