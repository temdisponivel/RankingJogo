<!-- 
	MATHEUS DE ALMEIDA AGUIAR CANDIDO
	3º SEMESTRE JOGOS DIGITAIS
 -->

<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo - Cadastra Usuário</title>
	</head>
	<body>
		<p>Digite suas informações:</p>
		<form name="cadastrarUsuario" action="processa_cadastra_usuario.php" method="POST">
			Nome:<br>
			<input type="text" name="nome" required>
			<br>
			Data de nascimento:<br>
			<input type="date" name="data_nascimento" required>
			<br>
			Sexo:<br>
			<select name="sexo" required>
				<option value="0">Masculino</option>
				<option value="1">Feminino</option>
				<option value="2" selected>Outro</option>
			</select>
			<br>
			Login:<br>
			<input type="email" name="login" required>
			<br>
			Senha:<br>
			<input type="password" name="senha" required>
			<br><br>
			<input type="submit" value="Cadastrar">
			<a href="./">Voltar</a>
		</form>
	</body>
</html>