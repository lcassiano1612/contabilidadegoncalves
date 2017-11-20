<?php
    
    $meu_email = "l.cassiano1612@gmail.com";
    $assunto = "email de teste";
    $mensagem = "mensagem no email de teste";


    $email = "lucas.oliveira@ingressorapido.com.br";
    $headers = 'From: '.$email;

    mail( "atendimento@contabilidadegoncalves.com.br" , $assunto, $mensagem, $headers);

?>