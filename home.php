<!-- 
	MATHEUS DE ALMEIDA AGUIAR CANDIDO
	3º SEMESTRE JOGOS DIGITAIS
 -->
 
<?php
	session_start();

	if (!isset($_SESSION["id"]))
	{
		header('Location: ./');
		die();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo - Home</title>
	</head>
	<body>
		<?php
			echo "<p>Olá, " . $_SESSION["nome"] .".</p>";
		?>
		<a href="./ranking.php">Mostrar ranking</a>
		<a href="./processa_logout.php">Logout</a>
	</body>
</html>