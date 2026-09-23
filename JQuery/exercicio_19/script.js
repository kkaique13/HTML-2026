var progresso = 0;

function avancar(){
    if(progresso >= 100){
        $('#barraProgresso').css('background-color', '#2a9d8f');
        $('#mensagem').text('Processo concluído!');
    }
    else{
        progresso = progresso + 10;
        $('#barraProgresso').css('width', progresso + '%');
    }
}