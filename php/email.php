<?php
    
    $nome       = $_POST['nome'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $mensagem   = $_POST['mensagem'];


    $assunto    = $nome." | ".$telefone;

    $email      = "lucas.oliveira@ingressorapido.com.br";
    $headers    = 'From: '.$email;

    mail( "atendimento@contabilidadegoncalves.com.br" , $assunto, $mensagem, $headers);

?>