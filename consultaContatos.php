<html>
<head>
<title>Tutorial Agenda</title>
</head>

<body bgcolor="#FFFFFF" text="#000000">

<br>
<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td height="60">
<div align="center"><font face="arial" size="6"><b>Consultar contatos</b></font></div></td>
</tr>
</table>

<br>
<form name="frm_pesq" method="POST" action="consultaContatos.php">
<table width="75%" border="0" cellspacing="1" cellpadding="0" align="center">
<tr bgcolor="#6699cc">
<td colspan="2">
<div align="center"><font face ="Arial" size="4"><b>Pesquisa</b></font></div></td>
</tr>

<tr bgcolor = "#ebebeb">
 <td width="32%"><font face="Arial" size="4">Nome a ser procurado:</font></td>
  <td width="68%"><font face="Arial" size="4"><input type="text" name="pesq" size="25">
 <input type="submit" name="pesq" value="Pesquisar &gt;&gt;">
 <input type="hidden" name="pesquisar" value="sim"></font></td>
 </tr>
 </table>
 </form><br>
 </body>
 </html>

<?php

include "conecta.php"; 
include "ver_sessao.php";

?>

<table width="95%" border="0" cellspacing="1" cellpadding="0" align="center">
<tr bgcolor="#6699cc" align="center">
<td colspan="5">
<div align="center"><font face="Arial" size="2"><b><font color="#FFFFFF">Contatos
cadastrados</font></b></font></div>
</td>
</tr>

<?php

$con = mysqli_connect ($host, $usuario, $senha, $banco);

$sql = "SELECT * FROM tb_contatos ORDER BY id_user";

$res = mysqli_query ($con, $sql);

if (mysqli_num_rows($res) > 0) {

$total = mysqli_num_rows ($res);

while($g = mysqli_fetch_array ($res)) { 

?>

<tr bgcolor="#cccccc" align="center">

<td width="3%">
	<div align="center"><b><font face ="Arial" size="2">ID Contato</font></b></div>

<td width="17%">
	<div align="center"><b><font face ="Arial" size="2">Data de inclus&atilde;o</font></b></div>
<td width="44%">
	<div align="center"><b><font face ="Arial" size="2">Contato</font></b></div>
<td width="26%">
	<div align="center"><b><font face ="Arial" size="2">Email</font></b></div>
<td width="10%">
	<div align="center"><b><font face ="Arial" size="2">Telefone</font></b></div>
</td>

</tr>

<tr bgcolor="#ebebeb" align="center">

<td width="3%" height="25"><font face="Arial" size="2">
<?php echo $g['id_user'];?>
</font></td>

<td width="44%" height="25"><font face="Arial" size="2">
<?php echo $g['inclusao_contato'];?>
</font></td>

<td width="26%" height="25"><font face="Arial" size="2">
<?php echo $g['nome_contato'];?>
</font></td>

<td width="26%" height="25"><font face="Arial" size="2">
<?php echo $g['email_contato'];?>
</font></td>

<td width="26%" height="25"><font face="Arial" size="2">
<?php echo $g['tel_contato'];?>
</font></td>
<?php } }

else{
echo "<br><br><div align=center><font face=Arial size=2>
Nenhum Contato Cadastrado!!<br><br></font></div>";

echo "Total de Contatos cadastrados: ". $total ."<br><br>";

mysqli_close($con);  } ?>

</table>

<br><div align="center"><font face="Arial" size="2">
<a href='opcoes.php'>[ Voltar para o menu opções ]</a></font></div> 

</body>
</html>