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

	$conn = new mysqli('localhost', 'root', '', 'jogo');
	
	if ($conn->connect_errno) 
	{
	    die('Ocorreu um erro interno: ' . $conn->connect_errno);
	}

	$sql = "SELECT j.nome, j.login, r.pontos, r.fase FROM jogadores j, ranking r WHERE j.id = r.jogador order by r.pontos DESC";
	$sucesso = true;
	$retorno = $conn->query($sql);
	if ($retorno == false)
	{
		$sucesso = false;
		$mensagem = "Ocorreu um erro ao buscar os dados." . $sql->error;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ranking Jogo</title>
		<style>
			table {
			    width:100%;
			}
			table, th, td {
			    border: 1px solid black;
			    border-collapse: collapse;
			}
			th, td {
			    padding: 5px;
			    text-align: left;
			}
			table#t01 tr:nth-child(even) {
			    background-color: #eee;
			}
			table#t01 tr:nth-child(odd) {
			   background-color:#fff;
			}
			table#t01 th	{
			    background-color: black;
			    color: white;
			}
		</style>
	</head>
	<body>
		<?php
			if ($sucesso)
			{
				echo "<table>
					  <tr>
					    <th>Nome</th>
					    <th>Login</th> 
					    <th>Pontos</th>
					    <th>Fase</th>
					  </tr>";
				for ($i = 0; $i < $retorno->num_rows; $i++)
				{
					$retorno->data_seek($i);
					$registro_ranking = $retorno->fetch_assoc();
					echo "<tr>
					      <td>" . $registro_ranking["nome"] . "</td>
					      <td>" . $registro_ranking["login"] . "</td>
					      <td>" . $registro_ranking["pontos"] . "</td>
					      <td>" . $registro_ranking["fase"] . "</td>
					      </tr>";
				}
				echo "</table>";
			}
			else
			{
				echo $mensagem;
			}
		?>
		<a href='./home.php'>Retornar</p>
	</body>
</html>