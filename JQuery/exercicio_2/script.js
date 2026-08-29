function verificar(){
    let num = $("#numero").val();
    if (num > 0){
        $(".resultado").css("background-color", "#4cc9f0");
        $(".resultado").css("border", "5px solid #4361ee");
        $(".resultado h1").css("color", "black");
        $(".text").css("color", "black");
        $(".text").text("O número é positivo!");
    }
    if (num < 0){
        $(".resultado").css("background-color", "#344e41");
        $(".resultado").css("border", "5px solid #3a5a40");
        $(".resultado h1").css("color", "white");
        $(".text").css("color", "white");
        $(".text").text("O número é negativo!");
    }
    if (num == 0){
        $(".resultado").css("background-color", "#fb6f92");
        $(".resultado").css("border", "5px solid #ff8fab");
        $(".resultado h1").css("color", "black");
        $(".text").css("color", "black");
        $(".text").text("O número é zero!");
    }
}