function verificar(){

    var pontuacao = Number($('#pontuacao').val());

    if(pontuacao >= 0 && pontuacao <= 99){
        $('#nivel').text('Nível: Iniciante.');
        $('#img').attr('src', 'https://i.pinimg.com/736x/a1/e7/b6/a1e7b65effbe1e1d3be9ffd18f4a6e2f.jpg');
        $('#img').attr('height', '500');
    }

    if(pontuacao >= 100 && pontuacao <= 499){
        $('#nivel').text('Nível: Intermediário.');
        $('#img').attr('src', 'https://i.pinimg.com/736x/1d/13/27/1d13274705b566a987048c33a26a7cbe.jpg');
        $('#img').attr('height', '500');
    }

    if(pontuacao >= 500 && pontuacao <= 999){
        $('#nivel').text('Nível: Avançado.');
        $('#img').attr('src', 'https://i.pinimg.com/736x/77/1e/d9/771ed9969980e0feb4dcf3f5469d3c9a.jpg');
        $('#img').attr('height', '500');
    }

    if(pontuacao >= 1000){
        $('#nivel').text('Nível: Mestre.');
        $('#img').attr('src', 'https://i.pinimg.com/736x/02/f6/48/02f648d438231b473c3c27e25ec5f2b7.jpg');
        $('#img').attr('height', '500');    
    }

}