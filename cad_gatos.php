
<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
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

	<title>Cadastro de gatos</title>

</head>
<body>

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

<h1  style="display:flex;justify-content:center;align-items:center";>Gato(a)</h1>

 
<?php
if(isset($_SESSION['msg'])){

	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}

?>

<div style="display:flex;justify-content:center;align-items:center;">
<center>
		<form method="POST" action="cad_cats.php" enctype="multipart/form-data">			

		<p> Sexo:
		<input type="text" name="sexo"></p>

		<p> Idade:
		<input type="text" name="idade"></p>

		<!--<p> Castrado:
		<input type="text" name="castro"></p>-->

		<p>O gato é castrado?:</p>

<div >
  <input type="radio" id="castro" name="drone" value="SIM"
         checked>
  <label for="SIM">Sim</label>
</div>

<div >
  <input type="radio" id="castro" name="drone"  value="NÃO">
  <label for="NÃO">Não</label>
</div>

		<p> Descrição:
		<input type="text" name="descricao"></p>

    <p> Telefone para contato:
    <input type="text" name="telefone"></p>

    <p> Email para contato:
    <input type="text" name="email"></p>
    
		<p>Selecione a foto do animal:
        <input type="file" name="imagem"></p><br><br>

		<input  name="enviar" type="submit" value="CADASTRAR">

		</form>
	</center>
</div>
<br><br><div align="center"><font face="Arial" size="2">
  <a href='cad_usuarios.php'>Voltar para a guia anterior</a></font></div>
<br> <section class="caixa" id="gato">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://cdn.pixabay.com/photo/2017/02/22/16/55/cat-2089916_960_720.png" class="img-fluid" width="" height="100px">
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Você sabia ?</h2>
              <p>Os gatos passam 2/3 da vida dormindo e além disso os gatos não conseguem sentir o sabor doce das coisas no paladar. </p>
            </div>
          </div>
          
        </div>
      </div>
    </section>



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