function resposta(id, resposta){
    const resp = resposta;
    const id_cliente = id;
    $.ajax({
        url: '../assets/ajax/resposta_solicitacao_ajax.php',
        method: 'POST',
        data: {
            id: id_cliente,
            resposta: resp
        },
        beforeSend: function(){
            if(resp == 2){
                $("#botao_rec_"+id).addClass('disabled');
                $("#botao_ac_"+id).text('Processando...');

            }else{
                $("#botao_ac_"+id).addClass('disabled');
                $("#botao_rec_"+id).text('Processando...');
            }
        }
    })
    .done(function(obj) {
        if(obj == 'success'){
            location.reload();
        }else{
            alert('ERRO');
        }
    })
}

function encaminhar(id_cliente){
    const id = id_cliente
    const parceiro = $("#parceiros").val();

    $.ajax({
        url: '../assets/ajax/encaminhamento_ajax.php',
        method: 'POST',
        data: {
            id: id,
            parceiro: parceiro
        },
        beforeSend: function(){
            $("#botao_enviar_"+id).text('Enviando...');
        }
    })
    .done(function(obj) {
        if(obj == 'success'){
            location.reload();
        }else{
            alert('ERRO')
        }
    })
    
}