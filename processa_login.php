<?php
	
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
			$sucesso = true;
		}
		else
		{
			$mensagem = "Usuário ou senha incorreto!";
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
			if ($sucesso == true)
			{
				echo "<p>Logado com sucesso!</p>";
			}
			else
			{
				echo "<p>Não foi possível realizar o login!</p>" . $mensagem;
			}
		?>
	</body>
</html>