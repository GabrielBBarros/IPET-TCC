<?
include "conecta.php";
include "ver_sessao.php";

$sql_del = mysqli_query("DELETE FROM tb_contatos WHERE id_user='$id_user'")
			or die("Erro no SQL: ".mysql_error());
			
echo"<br><br><div align=center><font face=Arial size=2>Contato EXCLUÍDO com Sucesso!
	<br><br><a href='opcoes.php'>[ Voltar para o menu de opções ]</a> </font></div><br>";
?>