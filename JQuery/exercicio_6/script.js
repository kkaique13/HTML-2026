function maior(){
    let n1 = Number($('#n1').val());
    let n2 = Number($('#n2').val());
    if (n1 > n2){
        $('.input1').css('background-color', '#c9a227');
        $('.input1').css('color', 'white');
        // Resetar o esitlo do input2 para o padrão
        $('.input2').css('background-color', 'white');
        $('.input2').css('color', 'black');
    }
    else{
        $('.input2').css('background-color', '#5b2a86');
        $('.input2').css('color', 'white');
        // Resetar o esitlo do input1 para o padrão
        $('.input1').css('background-color', 'white');
        $('.input1').css('color', 'black');
    }
}