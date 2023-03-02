<?php

    $variavel_host = 'localhost';

    $variavel_name = 'root';

    $variavel_password = '';

    $variavel_database = 'CAD_USUARIOS';

    $connect = mysqli_connect($variavel_host, $variavel_name, $variavel_password) or die (mysqli_error());
            mysqli_select_db($connect, $variavel_database);
            mysqli_set_charset($connect,'utf-8');

echo "" . "<br><br>";

$nome_login = $_POST['nome'];

$senha_login = MD5($_POST['senha']);

/*$con = mysqli_connect($host, $usuario, $senha, $banco);*/

$verifica = mysqli_query($connect, "SELECT * FROM USUARIOS WHERE NOME = 
'$nome_login' AND SENHA = '$senha_login'");

if (mysqli_num_rows($verifica)<=0) 
{

	echo"Erro:
	Credenciais erradas ou usuário não cadastrado!";
	
	header ("Refresh:2; url=login.html");

}

else if(!(mysqli_num_rows($verifica)<=0))
{
	echo"Tudo certo";
	
header ("Refresh:2; url=cad_usuarios.php");

mysqli_close($connect);	
}

else if(empty($nome_login) OR empty($senha_login))
{
	echo"Erro:
	Credenciais vazias.";
	
	header ("Refresh:2; url=login.html");
}


?>