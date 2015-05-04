<!-- 
	MATHEUS DE ALMEIDA AGUIAR CANDIDO
	3º SEMESTRE JOGOS DIGITAIS
 -->

<?php

	if (!isset($_POST["login"]))
	{
		header('Location: ./');
		die();
	}

	$conn = new mysqli('localhost', 'root', '', 'jogo');
	
	if ($conn->connect_errno) 
	{
	    die('Ocoreu um erro interno: ' . $conn->connect_errno);
	}

	$sql = "select id from jogadores where login = '" . $_POST["login"] . "';";

	$retorno = $conn->query($sql);

	if ($retorno->num_rows <= 0)
	{
		$sql = "INSERT INTO jogadores (nome, data_nascimento, sexo, login, senha) VALUES ('" . $_POST["nome"] . "', '" . $_POST["data_nascimento"] . "', " . $_POST["sexo"] . ", '" . $_POST["login"] . "', '" . $_POST["senha"] . "');";
		$sucesso = $conn->query($sql);
	}
	else
	{
		$sucesso = false;
		$mensagem = "Já existe um usuário cadastrado com o login " . $_POST["login"] . ". <a href='./cadastra_usuario.php'>Tente outro</a> ou <a href='./'>faça login.</a>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo - Cadastra Usuário</title>
	</head>
	<body>
		<?php
			if ($sucesso == true)
			{
				echo "<p>Usuário cadastrado com sucesso!</p>";
				echo "<a href='./'>Entrar</p>";
			}
			else
			{
				echo $mensagem;
			}
		?>
	</body>
</html>