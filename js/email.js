$( ".submit-form" ).click(function(e) {
    
    e.preventDefault();

    var nome        = $("input[name=nome]").val();
    var telefone    = $("input[name=telefone]").val();
    var email       = $("input[name=email]").val();
    var mensagem    = $("textarea[name=mensagem]").val();

    $.post('../php/email.php',{ nome: nome, telefone: telefone, email: email, mensagem: mensagem },function(data){
    
        $("input[name=nome]").val("");
        $("input[name=telefone]").val("");
        $("input[name=email]").val("");
        $("textarea[name=mensagem]").val("");

        $('.email-enviado').modal('show');
    
    });

});