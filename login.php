<html>
	<head>
		<link rel="stylesheet" type="text/css" href="nutribom.css">
		<?php	
			require "log.php";
			require "teste.php";
			/*session_start();
			if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
			{
				unset($_SESSION['login']);
				unset($_SESSION['senha']);
				header('location:index.php');
				}

			$logado = $_SESSION['login'];*/
		?>
	</head>
</html>
<body>
	<div class="tabelalogin">
		<form method="get" align=center action="pagininicial.php">
				<div class="container">
					<label><b>Nome de Usuario</b></label>
					<input type="text" placeholder="Insira Nome de Usuario" name="uname" required><BR>

					<label><b>Senha</b></label>
					<input type="password" placeholder="Insira a senha" name="psw" required><br>
					<span class="psw">Esqueceu a Senha?</a></span><br>
				</div>

				<div class="container" style="background-color:#E6E6FA">
					<button type="submit">Entrar</button>
				</div>
		</form>
	</div>
</body>