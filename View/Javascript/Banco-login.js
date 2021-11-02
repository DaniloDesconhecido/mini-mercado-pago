$(function(){
    $('#entrar').on('click', function(){
        var usuario = $('#usuario').val();
        var senha = $('#senha').val();
        if(usuario,senha != ""){
            $.ajax({
                url: "Controller/IBanco-login.php",
                type: "post",
                data:{
                    usuario: usuario, senha: senha
                },
                beforeSend : function(){
                    $('#resultado').html('Enviando...');
                }
            }).done(function(e){
                $('#resultado').html(e);
            });
        }
    });
});