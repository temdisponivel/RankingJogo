<?php
	$conn = new mysqli('localhost', 'root', '', 'jogo');
	
	if ($conn->connect_errno) 
	{
	    die('Ocoreu um erro interno: ' . $conn->connect_errno);
	}

	$sql = "INSERT INTO jogadores (nome, data_nascimento, sexo, login, senha) VALUES ('" . $_POST["nome"] . "', '" . $_POST["data_nascimento"] . "', " . $_POST["sexo"] . ", '" . $_POST["login"] . "', '" . $_POST["senha"] . "');";

	$sucesso = $conn->query($sql);
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
				echo "<a href='/rankingjogo/'>Entrar</p>";
			}
			else
			{
				echo "<p>Ocorreu um erro ao salvar os dados!</p>" . $conn->error;
			}
		?>
	</body>
</html>