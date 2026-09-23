function cadastrar(){

    var nome = $('#nome').val();
    var idade = Number($('#idade').val());
    var nota = Number($('#nota').val());

    if(idade >= 18 && nota >= 60){
        $('#resultado').text(nome + ' é maior de idade e foi aprovado.');
        $('.resultado').css('background-color', '#2a9d8f');
        $('.resultado').css('font-size', '20px');
        $('.resultado').css('border', '3px solid white');
    }

    if(idade >= 18 && nota < 60){
        $('#resultado').text(nome + ' é maior de idade e foi reprovado.');
        $('.resultado').css('background-color', '#d62828');
        $('.resultado').css('font-size', '20px');
        $('.resultado').css('border', '3px solid white');
    }

    if(idade < 18 && nota >= 60){
        $('#resultado').text(nome + ' é menor de idade e foi aprovado.');
        $('.resultado').css('background-color', '#f77f00');
        $('.resultado').css('font-size', '20px');
        $('.resultado').css('border', '3px solid white');
    }

    if(idade < 18 && nota < 60){
        $('#resultado').text(nome + ' é menor de idade e foi reprovado.');
        $('.resultado').css('background-color', '#6a040f');
        $('.resultado').css('font-size', '20px');
        $('.resultado').css('border', '3px solid white');
    }

    $('#resultado').attr('title', 'Resultado da classificação');

}