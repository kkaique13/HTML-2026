function maior(){
    let n1 = Number($('#n1').val());
    let n2 = Number($('#n2').val());
    let n3 = Number($('#n3').val());
    if (n1 > n2 && n1 > n3){
        $('.input1').css('background-color', '#c9a227');
        $('.input1').css('color', 'white');
        // Resetando os inputs 2 e 3
        $('.input2').css('background-color', 'white');
        $('.input2').css('color', 'black');
        $('.input3').css('background-color', 'white');
        $('.input3').css('color', 'black');
    }
    else if (n2 > n1 && n2 > n3){
        $('.input2').css('background-color', '#5b2a86');
        $('.input2').css('color', 'white');
        // Resetando os inputs 1 e 3
        $('.input1').css('background-color', 'white');
        $('.input1').css('color', 'black');
        $('.input3').css('background-color', 'white');
        $('.input3').css('color', 'black');
    }
    else{
        $('.input3').css('background-color', '#00509d');
        $('.input3').css('color', 'white');
        // Resetando os inputs 1 e 2
        $('.input1').css('background-color', 'white');
        $('.input1').css('color', 'black');
        $('.input2').css('background-color', 'white');
        $('.input2').css('color', 'black');
    }
}