function verify(){
    let usuario = $('#usuario').val();
    let senha = Number($('#senha').val());
    if (usuario == 'admin' && senha == 1234){
        $('.dados').css('background-color', '#588157');
    }
    else{
        $('.dados').css('background-color', '#bc4749');
        $('.dados').css('color', 'white');
    }
}