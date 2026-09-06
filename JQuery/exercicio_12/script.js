function calcularDesconto() {
    var valor = Number($('#valor').val());
    if (valor < 100) {
        $('#des').text("Sem desconto! Valor final: R$ " + valor.toFixed(2));
        $('.resdes').css('background-color', '#003049');
        $('.resdes').css('color', 'white');
    }
    else if (valor >= 100 && valor < 500) {
        var desconto = valor * 0.10;
        $('#des').text("Desconto: R$ " + desconto.toFixed(2) + " - Valor final: R$ " + (valor - desconto).toFixed(2));
        $('.resdes').css('background-color', '#d62828');
        $('.resdes').css('color', 'white');
    }
    else if (valor >= 500) {
        var desconto = valor * 0.20;
        $('#des').text("Desconto: R$ " + desconto.toFixed(2) + " - Valor final: R$ " + (valor - desconto).toFixed(2));
        $('.resdes').css('background-color', '#f77f00');
        $('.resdes').css('color', 'black');
    }
}