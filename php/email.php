<?php

    $nome       = $_POST['nome'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $mensagem   = $_POST['mensagem'];
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    /*abaixo contém os dados que serão enviados para o email
    cadastrado para receber o formulário*/
    
    $corpo = "Formulário enviado\n";
    $corpo .= "Nome: " . $nome . "\n";
    $corpo .= "Telefone: " . $telefone . "\n";
    $corpo .= "Email: " . $email . "\n";
    $corpo .= "Comentários: " . $mensagem . "\n";
    
    $email_to = 'atendimento@contabilidadegoncalves.com.br';
    //não esqueça de substituir este email pelo seu.
    
    $subject = "Contato via site";

    mail($email_to, $subject, $corpo, $headers);

?>