<?php

	include '_conexao.php';

	if (isset($_POST['enviar_veiculo'])) {
    
    $nome = strip_tags(trim($_POST['inputNome']));
    
    
    
   

	$sqlquery = "INSERT INTO veiculo (nome) VALUES ('$nome');";
  

    if ($con->query($sqlquery) === TRUE) {

    //echo "New record created successfully";
        header('Location: http://localhost/stable/cadastro.html');
        exit;

    } else {
    echo "Error: " . $sqlquery . "<br>" . $con->error;
    }

    //mysqli_query($con, $sqlquery);

    
    


 

    	


    

 
    
   
    
}
