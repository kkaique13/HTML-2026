function maior(){
    let idade = Number($("#idade").val());
    if (idade >= 18){
        $(".text").css("color", "green");
    }
    else{
        $(".text").css("color", "red");
    }
}