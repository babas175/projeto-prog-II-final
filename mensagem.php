<?php


$assunto    = $_POST['assunto'];
$corpo      = "
    Assunto: "     .$_POST['assunto']."
    Nome: "        .$_POST['nome']."
    Email: "       .$_POST['email']."
    Telefone: "    .$_POST['telefone']."
    Mensagem: "    .$_POST['mensagem']."
";


mail('sebastienlubinuffs@gmail.com', $assunto,$corpo,'from: cliente@brasilhaiti.com');
echo 'Email enviado com sucesso! 
um dos nossos funcionarios vai entrar em contato com voce  fique tranquilo';

?>