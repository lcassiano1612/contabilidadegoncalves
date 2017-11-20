$( ".submit-form" ).click(function(e) {
    
    e.preventDefault();

    var nome        = $("input[name=nome]").val();
    var telefone    = $("input[name=telefone]").val();
    var email       = $("input[name=email]").val();
    var mensagem    = $("textarea[name=mensagem]").val();

    $.ajax({
        url: "../php/email.php", 
        data: {
            nome: nome,
            telefone: telefone, 
            email: email, 
            mensagem: mensagem
        },
        success: function(result){
            $("#div1").html(result);
        }
    });

    alert(nome);
    alert(telefone);
    alert(email);
    alert(mensagem);

});