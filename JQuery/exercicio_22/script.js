function alterarTema(){

    var numero = Number($('#numero').val());

    if(numero == 1){
        $('body').css('background-color', 'white');
        $('body').css('color', 'black');
        $('.container').css('background-color', 'white')
        $('.container').css('border', '2px solid black')
        $('.tema').css('background-color', 'white')
        $('.tema').css('border', '2px solid black')
        $('#mensagem').text('Tema claro.');
    }

    if(numero == 2){
        $('body').css('background-color', 'black');
        $('body').css('color', 'white');
        $('.container').css('background-color', 'black')
        $('.container').css('border', '2px solid white')
        $('.tema').css('background-color', 'black')
        $('.tema').css('border', '2px solid white')
        $('#mensagem').text('Tema escuro.');
    }

    if(numero == 3){
        $('body').css('background-color', '#f77f00');
        $('body').css('color', 'black');
        $('.container').css('background-color', '#f77f00')
        $('.container').css('border', '2px solid black')
        $('.tema').css('background-color', '#f77f00')
        $('.tema').css('border', '2px solid black')
        $('#mensagem').text('Tema colorido.');
    }

    if(numero != 1 && numero != 2 && numero != 3){
        $('body').css('background-color', 'red');
        $('body').css('color', 'white');
        $('.container').css('background-color', 'red')
        $('.container').css('border', '2px solid black')
        $('.tema').css('background-color', 'red')
        $('.tema').css('border', '2px solid black')
        $('#mensagem').text('Número inválido!');
    }

}