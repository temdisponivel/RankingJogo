<?php
	session_start();

	if (isset($_SESSION["id"]))
	{
		header('Location: ./home.php');
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo</title>
	</head>
	<body>
		<form action="processa_login.php" method="POST">
			Login:<br>
			<input type="email" name="login" required>
			<br>
			Senha:<br>
			<input type="password" name="senha" required>
			<br><br>
			<input type="submit" value="Entrar" onsubmit="return valida()">
			<br><br>
			<a href="./cadastra_usuario.php">Novo usuário?</a>
		</form>
	</body>
</html>