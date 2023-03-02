<?php

include "ver_sessao.php";
?>

<html>
<head>
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">

    <!-- Google Font -->
    


    <link rel="shortcut icon" href="img/Ipet.png" />

     <!-- Compiled and minified CSS -->
   
    <title>Escolha o pet que procura</title>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg-success fixed-top">
        <div class="container">
          
          <a href="index.html" class="navbar-brand">
            <img src="img/Ipet.png" width="142">
          </a>
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
  <section id="casa">
      <div class="container">
        <div class="row">
      
            <div class="align-self-center">
<br><br><br>
            <center><h1 align="center">O que você procura?</h1></center>
            
            <form class="mt-4 mb-4">
              <div class="input-group input-group-lg">  
            </div>
            </form>
            </div>
       
        </div>
      </div>
       <br><br><br>
    </section>
<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td height="60">


<br>

 <section class="caixa" style="margin-right: 20px; margin-left: 80px; ";>
      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <div class="card" style="width: 18rem;">
              <img src="https://p1.pxfuel.com/preview/841/228/862/dog-bouvier-mountain-pet.jpg"  width="300" height="250">
               <div class="card-body">
               <center><h5 class="card-title">Cachorro</h5></center>
                <center><a href="listaCachorros.php?acao=entrar" class="btn btn-success btn-lg"><i class="fas fa-arrow-right"></i></a></center>
              </div>
            </div>
          </div>



            <div class="col-md-6">
            <div class="card" style="width: 18rem;">
              <img src="https://pixnio.com/free-images/2017/09/26/2017-09-26-07-24-05.jpg"  width="300" height="250">
               <div class="card-body">
               <center><h5 class="card-title">Gatos</h5></center>
                <center><a href="listaGatos.php?acao=entrar'" class="btn btn-success btn-lg"><i class="fas fa-arrow-right"></i></a></center>
              </div>
            </div>
          </div>
            







          <div class="col-md-6">
            <div class="card" style="width: 18rem;">
              <img src="https://cdn.pixabay.com/photo/2020/04/13/23/59/budgie-5040357_1280.jpg" class="card-img-top"  width="300" height="250">
               <div class="card-body">
               <center><h5 class="card-title">Aves</h5></center>
                <center><a href="listaAves.php?acao=entrar" class="btn btn-success btn-lg"><i class="fas fa-arrow-right"></i></a></center>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card" style="width: 18rem;">
              <img src="https://cdn.pixabay.com/photo/2019/10/24/07/14/rabbit-4573562__340.jpg" width="300" height="250">
               <div class="card-body">
               <center><h5 class="card-title">Outros</h5></center>
                
                <center><a href="listaOutros.php?acao=entrar" class="btn btn-success btn-lg"><i class="fas fa-arrow-right"></i></a></center>
  
              </div>
            </div>
          </div>
            
</td>
 <tr>
 
</table>

  <br><div align="center"><font face="Arial" size="2">
 </font></div>      <br><br> <br><br><br><br><br><br>
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
             <li><a href="politica.html">Política do site</a></li>
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