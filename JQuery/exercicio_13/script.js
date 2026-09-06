function frete(){
    var frete = Number($('#valor').val())
    if (frete < 100){
        $('#fre').text('Frete: R$20,00')
        $('.resfre').css('background-color', '#003049');
        $('.resdes').css('color', 'white');
    }
    if (frete >=100 && frete <= 199){
        $('#fre').text('Frete: R$10,00')
        $('.resfre').css('background-color', '#d62828');
        $('.resfre').css('color', 'white');
    }
    if (frete >= 200){
        $('#fre').text('Frete grátis!')
        $('.resfre').css('background-color', '#f77f00');
        $('.resfre').css('color', 'black');
    }
}