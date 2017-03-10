<?php
	$bd_local = 'localhost';
	$usuario='root';
	$senha='';
	$bd = 'nutribom';
	$link = mysqli_connect($bd_local,$usuario,$senha,$bd);
	if (mysqli_connect_errno())
	{
		echo "Erro de Conexão: " . mysqli_connect_error();
	}
	function testando(){
	$query = 'SELECT * FROM usuarios';
	$resultado = mysqli_query($link, $query);
	echo $resultado;
	}
?>