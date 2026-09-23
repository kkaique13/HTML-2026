function verificar(){

    var quantidade = Number($('#quantidade').val());

    if(quantidade == 0){
        $('#situacao').text('Estoque esgotado.');
        $('.resultado').css('background-color', '#d62828');
    }

    if(quantidade >= 1 && quantidade <= 5){
        $('#situacao').text('Estoque baixo.');
        $('.resultado').css('background-color', '#f77f00');
    }

    if(quantidade >= 6 && quantidade <= 20){
        $('#situacao').text('Estoque normal.');
        $('.resultado').css('background-color', '#3a506b');
    }

    if(quantidade > 20){
        $('#situacao').text('Estoque alto.');
        $('.resultado').css('background-color', '#2a9d8f');
    }

}