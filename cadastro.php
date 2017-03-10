 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="nutribom.css">
		<?php	
			require_once ('log.php');
			require_once ('teste.php');
			session_start();
			if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
			{
				unset($_SESSION['login']);
				unset($_SESSION['senha']);
				header('location:index.php');
				}

			$logado = $_SESSION['login'];
		?>
	</head>
</html>
<body>
	<div class="tabelalogin">
		<form method="get" align=center action="log.php" target="_blank">
				<div class="container">
					<label><b>Nome </b></label>
					<input type="text" placeholder="Insira seu nome" name="nome" required><BR>
					
					<label><b>Nome de Usuario</b></label>
					<input type="text" placeholder="Insira Nome de Usuario" name="uname" required><BR>

					<label><b>Senha</b></label>
					<input type="password" placeholder="Insira a senha" name="psw" required><br>
					<label><b>Confirme sua Senha</b></label>
					<input type="password" placeholder="Insira novamente sua senha" name="psw1" required><br>
					
				</div>

				<div class="container" style="background-color:#E6E6FA">
					<button type="submit">Entrar</button>
				</div>
		</form>
	</div>
</body>