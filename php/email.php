<?php

    $assunto    = $nome." | ".$telefone;

    $email      = "lucas.oliveira@ingressorapido.com.br";
    $headers    = 'From: '.$email;

    if(mail( "l.cassiano1612@gmail.com" , $assunto, $mensagem, $headers)){

        echo "deu certo";

    }

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

    $status = mail($email_to, $subject, $corpo, $headers);
    //enviando o email.
    
    if ($status) {
        echo "<script> alert('Formulário enviado com sucesso!'); </script>";
    //mensagem de form enviado com sucesso.
    
    } else {
        echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
    //mensagem de erro no envio. 
    
    }

?>