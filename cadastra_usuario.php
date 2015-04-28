<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo - Cadastra Usuário</title>
	</head>
	<body>
		<p>Digite suas informações:</p>
		<form action="processa_cadastra_usuario.php" method="POST">
			Nome:<br>
			<input type="text" name="nome">
			<br>
			Data de nascimento:<br>
			<input type="text" name="data_nascimento">
			<br>
			Sexo:<br>
			<select name="sexo">
				<option value="0">Masculino</option>
				<option value="1">Feminino</option>
				<option value="2">Outro</option>
			</select>
			<br>
			Login:<br>
			<input type="text" name="login">
			<br>
			Senha:<br>
			<input type="password" name="senha">
			<br><br>
			<input type="submit" value="Cadastrar">
			<br><br>
			<a href="cadastra_usuario.php">Novo usuário?</a>
		</form>
	</body>
</html>