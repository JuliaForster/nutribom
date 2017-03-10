<?php
require_once('teste.php');
session_start();
$login = $_POST['uname'];
$senha = $_POST['psw'];
$select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em contato com o Administrador, gilson_sales@bytecode.com.br");
$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:paginainicial.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:index.php');
	
	}

?> $sql = "SELECT `id`, `nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `usuario` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);
  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuário é inválido
    return false;
  } else {
    // Definimos dois valores na sessão com os dados do usuário
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
    // Verifica a opção se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definimos dois valores na sessão com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }
    return true;
  }
}
