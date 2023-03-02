<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'Cad_animais';

if(!($mysqli = new mysqli($host, $usuario, $senha, $banco)))
{
	echo "<p align=\"center\">
	
	<big><strong>Não foi possível estabelecer uma conexão com o gerenciador MySQL ou Banco de dados
	
		Favor contactar o Administrador.
	</strong></big></p>";
	exit;
	
}

if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());



$con = $mysqli;

?>