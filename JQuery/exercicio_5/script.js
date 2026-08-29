function media(){
    let n1 = Number($("#nota1").val());
    let n2 = Number($("#nota2").val());
    let n3 = Number($("#nota3").val());
    var nT = n1 + n2 + n3;
    var m = nT / 3;
    $("#nota").append(nT);
    $("#media").append(m);
    if (m >= 60){    
        $(".passou").text("Aprovado");
        $(".passou").css("color", "green");
    }
    else{ 
        $(".passou").text("Reprovado");
        $(".passou").css("color", "red");
    }
}