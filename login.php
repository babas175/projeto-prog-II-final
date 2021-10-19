<?php
// Conexao
require_once 'conexao.php';
session_start();
// Botao enviar 
if(isset($_POST['entrar'])):
    $erros = array();
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($email) or empty($senha)):
        $erros[] = "<li> O campo email / senha precisa ser preenchido <li>";
    else:
        $sql ="SELECT email FROM fomulario_cadastro WHERE email ='$email'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $sql= "SELECT * FROM fomulario_cadastro WHERE email='$email' AND senha ='$senha' ";
        $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado']= true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: inicial.html');
               
                else:
                    $erros[] ="<li> Usuario e senha nao conferem </li>";
                endif;

        else:
            $erros[] ="<li> Usuario inexistente </li>";
        endif;

    endif;

endif;



if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;

?>