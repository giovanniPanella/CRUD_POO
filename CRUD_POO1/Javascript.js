$("#FormCadastro").on('submit',function(event){
    event.preventDefault();
    var Dados = $(this).serialize();
    $.ajax({
       url: 'Controllers/ControllerCadastro.php',
       type: 'post',
       datatype: 'html',
       data: Dados,
       success: function(Dados){
           $('.Resultado').show().html(Dados);
       }
    });
});

$('.Deletar').on('click', function(event){
   event.preventDefault();
   var Link= $(this).attr('href');
    alert(Link);
     // if (confirm("Deseja mesmo Apagar esse Dado?"));
});

