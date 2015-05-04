<!-- 
	MATHEUS DE ALMEIDA AGUIAR CANDIDO
	3º SEMESTRE JOGOS DIGITAIS
 -->

<?php
	session_start();

	if (!isset($_POST["login"]))
	{
		header('Location: ./');
		die();
	}

	$conn = new mysqli('localhost', 'root', '', 'jogo');
	
	if ($conn->connect_errno) 
	{
	    die('Ocorreu um erro interno: ' . $conn->connect_errno);
	}

	$sql = "select * from jogadores where login = '" . $_POST["login"] . "';";

	$retorno = $conn->query($sql);

	if ($retorno == false)
	{
		$sucesso = false;
		$mensagem = "Login inválido!";
	}
	else
	{
		$retorno->data_seek(0);

		$jogador = $retorno->fetch_assoc();

		if ($jogador["senha"] == $_POST["senha"])
		{
			$_SESSION["id"] = $jogador["id"];
			$_SESSION["nome"] = $jogador["nome"];
			header('Location: ./home.php');
			die();
		}
		else
		{
			$mensagem = "Usuário ou senha incorreto!";
			session_destroy();
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo - Cadastra Usuário</title>
	</head>
	<body>
		<?php
			echo "<p>Não foi possível realizar o login!</p>" . $mensagem;
			echo "<a href='./'>Voltar</a>";
		?>
	</body>
</html>