function parimpar(){
    let num = $("#numero").val();
    if (num % 2 == 0){
        $(".resultado").css("background-color", "#344e41");
        $(".resultado").css("border", "5px solid #3a5a40");
        $(".resultado h1").css("color", "white");
        $(".text").css("color", "white");
        $(".text").text("O número informado é par!")
    }
    else{
        $(".resultado").css("background-color", "#ffd60a")
        $(".resultado").css("border", "5px solid #ffc300");
        $(".resultado h1").css("color", "black");
        $(".text").css("color", "black");
        $(".text").text("O número informado é ímpar!")
    }
}