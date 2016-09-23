<?php

	include('_conexao.php');

	if (isset($_POST['enviar_usuario'])) {
    
    $nome = strip_tags(trim($_POST['inputNome']));
    $email = strip_tags($_POST['inputEmail']);
    $login = strip_tags($_POST['inputLogin']);
    $senha = strip_tags($_POST['inputSenha']);
    $cnfsenha = strip_tags($_POST['inputCnfSenha']);
    
    if($senha === $cnfsenha){

    $sqlquery = "INSERT INTO cliente (nome,telefone,email) VALUES ('$nome',$telefone,'$email');";

    if ($con->query($sqlquery) === TRUE) {

    //echo "New record created successfully";
        header('Location: http://localhost/stable/cadastro.html');
        exit;

    } else {
    echo "Error: " . $sqlquery . "<br>" . $con->error;
    }

    //mysqli_query($con, $sqlquery);   
    
}



    }

	

