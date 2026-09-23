function verificar(){

    var senha = $('#senha').val();
    var tamanho = senha.length;

    if(tamanho < 6){
        $('#situacao').text('Senha fraca.');
        $('#senha').css('border-color', '#d62828');
    }

    if(tamanho >= 6 && tamanho <= 9){
        $('#situacao').text('Senha média.');
        $('#senha').css('border-color', '#f77f00');
    }

    if(tamanho >= 10){
        $('#situacao').text('Senha forte.');
        $('#senha').css('border-color', '#2a9d8f');
    }

}