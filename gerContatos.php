<html>
<head>
	<title>Tutorial Agenda</title>
</head>

	<body bgcolor="#FFFFFF" text="#000000">
	
	<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
		<td height="60">
		<div align="center"><font face ="Arial" size="6"><b>Gerenciamento de Contatos
		</b></font></div></td>
		</tr>
		</table>
		<br>
		<form name="frm_pesq" method="POST" action="gerContatos.php">
		<table width ="75%" border ="0" cellspacing ="1" cellpadding="0" align ="center">
			<tr bgcolor="#6699CC">
			<td colspan="2">
		<div align ="center"><font face = "Arial" size="4"><b>Pesquisa</b></font></div></td>
		</tr>
		
		<tr bgcolor="#ebebeb">
			<td width="32%"><font face="Arial" size="4">Nome a ser procurado:</font></td>
			<td width="68%"><font face = "Arial" size ="4"><input type ="text" name ="pesq" size ="25">
			<input type ="submit" name ="sim" value ="Pesquisar &gt;&gt;">
			<input type  = "hidden" name = "pesquisar" value = "sim"></font></td>
		</tr>
		</table>
		</form>

<br><div align="center"><font face="Arial" size=2>
<a href='opcoes.php'>[ Cancelar ]</a></font></div>
</body>
</html>

<?php
	include "conecta.php";
	include "ver_sessao.php";
	
	$pesquisar = $_POST['pesq'];
	
	
	$sql_contato = "SELECT id_user, date_format(inclusao_contato,'%d/%m/%Y = %H:%i') as
	inclusao_contato, nome_contato, email_contato, tel_contato FROM tb_contatos where nome_contato = '$pesquisar'";
	
	if ($pesquisar == true)
		$sql_contato = $sql_contato."AND nome_contato LIKE '%pesq%'";

		$sql_res = $sql_contato."ORDER BY inclusao_contato ";
	
	$res = mysqli_query($con, $sql_res)or die("Erro no comando SQL:".mysqli_error($con));
	
if(mysqli_num_rows($res) > 0)  { ?>

<table width="95%" border="0" cellspacing="1" cellpadding="0" align="center">
<tr bgcolor="#6699CC">
<td colspan="7">
<div align="center"><font face='Arial' size="2"><b><font color="#FFFFFF">Contatos
	cadastrados</font></b></font></div>
	</td>
	</tr>
<tr bgcolor="#cccccc">
<td width="19%">
<div align="center"><b><font face='Arial' size="2">Data de inclus&atilde;o
	</font></b></div>
	</td>
	
	<td width="33%">
<div align="center"><b><font face='Arial' size="2">Contato
	</font></b></div>
	</td>
	
	<td width="23%">
<div align="center"><b><font face='Arial' size="2">E-mail
	</font></b></div>
	</td>
	
	<td width="23%">
<div align="center"><b><font face='Arial' size="2">Telefone
	</font></b></div>
	</td>
	
	<td width="13%">
<div align="center"><b><font face='Arial' size="2">Alterar
	</font></b></div>
	</td>
	
	<td width="12%">
<div align="center"><b><font face='Arial' size="2">Excluir
	</font></b></div>
	</td>
	</tr>

<?php

$total = mysqli_num_rows($res);

while($res = mysqli_fetch_array($res)) ?> {

<tr bgcolor="#ebebeb" align="center">
<td width="19%" height="25"><font face="Arial" size="2">
	<?php echo $res ['inclusao_contato']; ?>
	</font></td>
	
<td width="33%" height="25"><font face="Arial" size="2">
	<?php echo $res ['nome_contato']; ?>
	</font></td>
	
<td width="23%" height="25"><font face="Arial" size="2">
	<?php echo $res ['email_contato']; ?>
	</font></td>
	
<td width="23%" height="25"><font face="Arial" size="2">
	<?php echo $res ['tel_contato']; ?>
	</font></td>
	
<td width="23%" height="25">
<div align="center"><font face="Arial" size="2">
<a href='altContatos.php?id_contato =<?php echo $res['id_contato'];?>&acao=entrar'>[Alterar]</a>
</font></div>
</td>

<td width="23%" height="25">
<div align="center"><font face='Arial' size="2"><a href='excluirContatos.php?id_contato =<?php echo $res['id_contato']; ?>'>[Excluir]</a>
</font></div>
</td>
</tr>

</table>

<?php }
else {
	echo "<br><br><div align=center><font face=Arial size=2>Desculpe, mas
	nada foi encontrado<br><br></font></div>";
}

mysqli_close($con);

echo "
<br><div align=center><font face=Arial size=2>
<a href='opcoes.php'>[ Voltar para o menu de opções ]</a></font></div>
</body>
</html>
";

?>