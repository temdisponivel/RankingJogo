<?php
	session_start();

	if (!isset($_SESSION["id"]))
	{
		header('Location: ./');
		die();
	}
	
	session_unset();
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo - Logout</title>
	</head>
	<body>
		<p>Você foi desconectado com sucesso!<p>
		<a href="./">Entrar novamente?</p>
	</body>
</html>