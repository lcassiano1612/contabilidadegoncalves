<?php
    
    $nome       = $_POST['nome'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $mensagem   = $_POST['mensagem'];


    $assunto    = $nome." | ".$telefone;

    $email      = "lucas.oliveira@ingressorapido.com.br";
    $headers    = 'From: '.$email;

    if(mail( "l.cassiano1612@gmail.com" , $assunto, $mensagem, $headers)){

        echo "deu certo";

    }

?>