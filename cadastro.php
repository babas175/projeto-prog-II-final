<?php

    include("conexao.php");
    
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $idade=$_POST['idade'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];
    $senha=$_POST['senha'];
    $email=$_POST['email'];
    $sexo=$_POST['sexo'];
   


    $sql="INSERT fomulario_cadastro(nome,sobrenome,Idade,CPF,Telefone,Endereco,senha,email,sexo) 
            VALUES('$nome','$sobrenome', '$idade','$cpf','$telefone','$endereco','$senha','$email','$sexo')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuario cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

?>

