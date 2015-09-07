jQuery(document).ready(function($){


   var url = window.location.pathname;
   
    switch(url) {
        case '/projects/modelo/cadastro_paciente.html':
        teste(); 

        break;
    }
    

});


function teste(){
    $('#cadastrar_paciente').click(function() {
        var nome_completo = $('#nome_completo').val();
        var cpf = $('#cpf').val();
        var data_nasc = $('#data_nasc').val();
        var telefone = $('#telefone').val();
        var endereco = $('#endereco').val();
        var nome_user = $('#nome_user').val();
        var senha = $('#senha').val();

        
        $.ajax({
            type: 'POST',
            dataType: 'text',
            url: 'controller/cadastro_paciente.php',
            data: {
                action:'cadastrar_paciente',
                nome_completo:nome_completo,
                cpf:cpf,
                data_nasc:data_nasc,
                telefone:telefone,
                endereco:endereco,
                nome_user:nome_user,
                senha:senha
            },
            beforesend: function(){
                $('#msg').empty();
                $('#msg').append("<img src='imagens/load.gif'>");

            },
            success: function(data, response, req) {
                $('#msg').empty();
                $('#msg').append(data);
            }
        });
    });

    
}


