function verificar(){
    var velocidade = Number($("#vel").val())
    if (velocidade <= 60){
        $("#resultado").text("Velocidade normal");
        $(".resposta").css("background-color", "#606c38");
        $(".resposta").css("color", "white");
        $("#image").attr("src", "https://i.pinimg.com/736x/4b/e7/39/4be739f047c056ec53b3f4d6ab0eb6fa.jpg");
    }
    else if (velocidade >= 61 && velocidade <= 80){
        $("#resultado").text("Atenção");
        $(".resposta").css("background-color", "#edc531");
        $(".resposta").css("color", "black");
        $("#image").attr("src", "https://i.pinimg.com/736x/8d/a6/f9/8da6f974798e87f7dbf55a734636a738.jpg");
    }
    else if (velocidade > 80){
        $("#resultado").text("Excesso de velocidade");
        $(".resposta").css("background-color", "#780000");
        $(".resposta").css("color", "white");
        $("#image").attr("src", "https://i.pinimg.com/736x/44/6c/72/446c7206b0f6ac7d0a3298c23b88f354.jpg");
    }
}