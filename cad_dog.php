<?php

    session_start();

    $variavel_host = 'localhost';

    $variavel_name = 'root';

    $variavel_password = '';

    $variavel_database = 'CAD_ANIMAIS';

    $connect = mysqli_connect($variavel_host, $variavel_name, $variavel_password) or die (mysqli_error());
            mysqli_select_db($connect, $variavel_database);
            mysqli_set_charset($connect,'utf-8');



   

    
    //$sql = mysqli_query($connect, "INSERT INTO CACHORRO VALUE('$sexo','$porte','$idade','$castrado','$descricao','$imagem');");
 
    //move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
   
    


$arquivo = filter_input(INPUT_POST,'enviar', FILTER_SANITIZE_STRING);
if($arquivo)
{



    $sexo = $_POST['sexo'];

    $porte = $_POST['porte'];

    $idade = $_POST['idade'];

    $castrado = $_POST['drone'];

    $descricao = $_POST['descricao'];

    $telefone = $_POST['telefone'];

    $email = $_POST['email'];

    $imagem = $_FILES['imagem'] ['name'];

    //var_dump($_FILES['imagem']);

    $result_img = mysqli_query($connect, "INSERT INTO CACHORRO VALUES('$sexo','$porte','$idade','$castrado','$descricao','$telefone','$email','$imagem');");
    echo $imagem;
    $insert_msg = $connect->prepare($result_img);
    
    
    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);

    echo "Conta criada com sucesso!";

} else 
{
    $_SESSION['msg'] = "<p> ERRO AO SALVAR OS DADOS </p>";
    header("location: cad_cachorro.php");
}
   

    ?>