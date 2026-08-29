function passou(){
    let nota = $("#nota").val()
    if (nota >= 60){
        $(".text").css("color", "green")
    }
    else{
        $(".text").css("color", "red")
    }
}