function verify(){
    let senha = Number($('.senha').val());
    if (senha == 1234){
        $('#acesso').prop('disabled', false);
        $('.senha').css('background-color', 'white');
        $('.senha').css('color', 'black');
    }
    else{
        $('.senha').css('background-color', '#9d0208');
    }
}