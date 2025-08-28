<?php
session_start();
require 'contato.class.php';

if(isset($_POST['email']) && !empty($_POST['email'])){
	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$conecta = $contato = new Contato();
	
	if($conecta){
		$chkUser = $contato->checkUser($email);

		if(!empty($chkUser)){
			$chkPass = $contato->checkPass($email, $senha);
			$_SESSION['nome'] =  $chkPass['nome'];
			header("location:index.php");
		}else{
			echo "Login ou senha Incorretos!.";
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

				<p><a href="forgotpass.html" class="esqueceu">Esqueceu a senha?</a></p>

				<input type="submit" name="botao" value="Enviar" class = "centralizaBotao">
			</form>
		</div>
	</div>
</body>
</html>