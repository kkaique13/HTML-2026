function converter() {
    let celsius = Number($('#celsius').val());
    let fahrenheit = (celsius * 9/5) + 32;
    if (fahrenheit > 100) {
        $('#res').text(fahrenheit.toFixed(2) + ' ºF');
        $('#fah').css('background-color', '#92140c');
    } else {
        $('#res').text(fahrenheit.toFixed(2) + ' ºF');
        $('#fah').css('background-color', '#00798c');
    }
}