<?php
	session_start();
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