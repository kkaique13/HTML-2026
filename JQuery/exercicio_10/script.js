function somar(){
    let n1 = Number($("#num1").val());
    let n2 = Number($("#num2").val());
    let res = n1 + n2;
    $(".resultado").css("background-color", "#e63946");
    $(".resultado").css("color", "white");
    $("#conta").text(n1 + " + " + n2 + " = " + res);
}

function subtrair(){
    let n1 = Number($("#num1").val());
    let n2 = Number($("#num2").val());
    let res = n1 - n2;
    $(".resultado").css("background-color", "#a8dadc");
    $(".resultado").css("color", "black");
    $("#conta").text(n1 + " - " + n2 + " = " + res);
}

function multiplicar(){
    let n1 = Number($("#num1").val());
    let n2 = Number($("#num2").val());
    let res = n1 * n2;
    $(".resultado").css("background-color", "#457b9d");
    $(".resultado").css("color", "black");
    $("#conta").text(n1 + " * " + n2 + " = " + res);
}

function dividir(){
    let n1 = Number($("#num1").val());
    let n2 = Number($("#num2").val());
    if (n2 == 0){
        $("#conta").text(n1 + " / " + n2 + " = ");
        $(".resultado").css("background-color", "#780000");
        $(".resultado").css("color", "white");
        $("#conta").text("Erro: Divisão por zero!");
    }
    else{
        let res = n1 / n2;
        $(".resultado").css("background-color", "#1d3557");
        $(".resultado").css("color", "white");
        $("#conta").text(n1 + " / " + n2 + " = " + res);
    }

}