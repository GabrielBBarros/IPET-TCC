<?php

    $variavel_host = 'localhost';

    $variavel_name = 'root';

    $variavel_password = '';

    $variavel_database = 'CAD_USUARIOS';

    $connect = mysqli_connect($variavel_host, $variavel_name, $variavel_password) or die (mysqli_error());
            mysqli_select_db($connect, $variavel_database);
            mysqli_set_charset($connect,'utf-8');



    $nome = $_POST['nome'];

    $idade = $_POST['idade'];

    $email = $_POST['email'];

    $senha = MD5($_POST['senha']);

  

    $sql = mysqli_query($connect, "INSERT INTO USUARIOS VALUES('$nome','$idade','$email','$senha');");

   
    echo "Conta criada com sucesso!";
    header ("Refresh:2; url=cad_usuarios.php");


    ?>