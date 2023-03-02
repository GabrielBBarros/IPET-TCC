<html>
<head>
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Animate.css -->
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    
    <!-- Google Font -->
    
    <script type="text/javascript" src="JS/1.js"></script>
    <script type="text/javascript" src="JS/jquery-3.1.1.min.js"></script>

    <link rel="shortcut icon" href="img/Ipet.png" />

     <!-- Compiled and minified CSS -->
  
<title>Aves</title>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg-success fixed-top">
        <div class="container">
          <div class="animate__animated animate__fadeInLeft">     
          <a href="index.html" class="navbar-brand">
            <img src="img/Ipet.png" width="142">
          </a>
          </div>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span style="color: white"><i class="fas fa-bars fa-2x"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal"> 
            <ul class="navbar-nav ml-auto" style="display:flex;justify-content:center;align-items:center";>
              <li class="nav-item" >
                <a href="index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="contatos.html" class="nav-link">Contatos</a>
              </li>
              <li class="nav-item">
                <a href="animais.html" class="nav-link">Animais</a>
              </li>
              <li class="nav-item">
                <a href="quem_somos.html" class="nav-link">Quem somos</a>
              </li>
              <li class="nav-item" id="a">
                <a href="login.html" class="btn btn-outline-light ml-4">Entrar</a>
              </li>
              <li class="nav-item" id="a">
                <a href="opcoes.php" class="btn btn-outline-light ml-4">Feed de Animais</a>
              </li>
              
            </ul>
          </div>

        </div>
      </nav>

    </header><!--/fim Cabecalho -->

 <br><br><br><br>
<br>
<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td height="60">
<div align="center"><font face="arial" size="6"><b>Lista de Aves</b></font></div></td>
</tr>
</table>

 </body>
 </html>

<?php

include "conecta.php"; 
include "ver_sessao.php";

?>

<table class="table" width="95%" border="0" cellspacing="1" cellpadding="0" align="center">
<tr bgcolor="#28a745" align="center">
<td colspan="8">
<div align="center"><font face="Arial" size="2"><b><font color="#FFFFFF">Aves</font></b></font></div>
</td>
</tr>

<?php

$con = mysqli_connect ($host, $usuario, $senha, $banco);

$sql = "SELECT * FROM AVES";

$res = mysqli_query ($con, $sql);

if (mysqli_num_rows($res) > 0) {

$total = mysqli_num_rows ($res);

while($g = mysqli_fetch_array ($res)) { 

?>

<tr bgcolor="#cccccc" align="center">

<td width="3%">
	<div align="center"><b><font face ="Arial" size="2">Tipo</font></b></div>
<td width="44%">
	<div align="center"><b><font face ="Arial" size="2">Sexo</font></b></div>
<td width="26%">
	<div align="center"><b><font face ="Arial" size="2">Descriç&atilde;o</font></b></div>
<td width="10%">
  <div align="center"><b><font face ="Arial" size="2">Telefone</font></b></div>
</td>
<td width="10%">
  <div align="center"><b><font face ="Arial" size="2">Email</font></b></div>
</td>
<td width="10%">
	<div align="center"><b><font face ="Arial" size="2">Imagem</font></b></div>
</td>

</tr>

<tr bgcolor="#ebebeb" align="center">

<td width="3%" height="25"><font face="Arial" size="2">
<?php echo $g['TIPO'];?>
</font></td>


<td width="26%" height="25"><font face="Arial" size="2">
<?php echo $g['SEXO'];?>
</font></td>

<td width="26%" height="25"><font face="Arial" size="2">
<?php echo $g['DESCRICAO'];?>
</font></td>

<td width="26%" height="25"><font face="Arial" size="2">
<?php 
echo $g['TELEFONE'];
?>
</font></td>

<td width="26%" height="25"><font face="Arial" size="2">
<?php 
echo $g['EMAIL'];
?>
</font></td>

<td width="26%" height="25"><font face="Arial" size="2">
<img src="<?php echo $g['IMAGEM'] ?>" width="300" height="150" />
</font></td>
<?php } }

?>

</table>

<br><div align="center"><font face="Arial" size="2">
  <a href='opcoes.php'>Voltar para a guia anterior</a></font></div>
<br><div align="center"><font face="Arial" size="2">
  <a href='index.html'>Voltar para a página inicial</a></font></div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer >
      <footer >
     <div class="container">
       <div class="row">
         <div class="col-md-2">
           <a href="index.html"><img src="img/Ipet.png" width="142"></a>
           <br>
            <br>
             <br>
             
         </div>
         <div class="col-md-2">
           <h4>Animais</h4>
           <ul class="navbar-nav">
             <li><a href="animais.html">Animais</a></li>
             <li><a href="politica.html">Política</a></li>
           </ul>
         </div>
         <div class="col-md-2">
            <h4>Comunidade</h4>
           <ul class="navbar-nav">
             <li><a href="quem_somos.html">Quem somos</a></li>
             <li><a href="contatos.html">Contato</a></li>
             <li><a href="index.html">Home</a></li>
           </ul>
         </div>
         <div class="col-md-2">
            <h4>ONGs</h4>
           <ul class="navbar-nav">
           </ul>
         </div>
         <div class="col-md-4">
              <h4>Redes Sociais</h4>
           <ul class="navbar-nav" id="social">
             <li><a href="https://www.instagram.com/projetotccipet/"><i class="fab fa-instagram"></i></a></li>
             <li><a href="ipet.tccetec@gmail.com"><i class="fas fa-envelope"></i></a></li>
           </ul>
         </div>
       </div>
     </div>

   </footer>
    </footer>
    <!-- JavaScript (Opcional) -->
    <script type="text/javascript" src="JS/1.js"></script>
    <script type="text/javascript" src="JS/jquery-3.1.1.min.js"></script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="JS/pace-master/pace.min.js"></script>
</body>
</html>