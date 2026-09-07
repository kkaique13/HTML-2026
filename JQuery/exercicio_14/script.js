function verificar(){
    var idade = Number($("#idade").val())
    if (idade <= 12){
        $("#idadep").text("Uma criança!")
        $("#image").attr("src", "https://i.pinimg.com/736x/6f/96/33/6f96337a8c1586979159e5302c0f15d0.jpg")
    }
    else if (idade >= 13 && idade <= 17){
        $("#idadep").text("Um adolescente!")
        $("#image").attr("src", "https://i.pinimg.com/1200x/92/df/e7/92dfe78a24f07cae6fc9166100528964.jpg")
    }
    else if (idade >= 18 && idade <= 59){
        $("#idadep").text("Um adulto!")
        $("#image").attr("src", "https://i.pinimg.com/736x/17/5f/ab/175fab8c801408d0c73084a8f8082f11.jpg")
    }
    else if (idade >= 60){
        $("#idadep").text("Um idoso!")
        $("#image").attr("src", "https://i.pinimg.com/1200x/15/57/24/155724ebf6807530a6353121c42cbe25.jpg")
    }
}