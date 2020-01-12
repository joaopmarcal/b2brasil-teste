$(document).ready(function () {
    $("#exampleInputTelephone").mask("(00) 0000-00009");
    $("#exampleInputTelephone").blur(function (event) {
        if ($(this).val().length == 15){
            $("#exampleInputTelephone").mask("(00) 00000-0009");
        } else {
            $("#exampleInputTelephone").mask("(00) 0000-00009");
        }
    })
})

$(document).ready(function(){
    $("#button-one").click(function(){
        $(this).attr("class", "btn btn-primary");
        $("#button-two").attr("class", "btn");
        $("#button-three").attr("class", "btn");
        $("#box-one").attr("class", "show");
        $("#box-two").attr("class", "hide");
        $("#box-three").attr("class", "hide");
    });
});
$(document).ready(function(){
    $("#button-two").click(function(){
        $(this).attr("class", "btn btn-primary");
        $("#button-one").attr("class", "btn");
        $("#button-three").attr("class", "btn");
        $("#box-one").attr("class", "hide");
        $("#box-two").attr("class", "show");
        $("#box-three").attr("class", "hide");
    });
});
$(document).ready(function(){
    $("#button-three").click(function(){
        $(this).attr("class", "btn btn-primary");
        $("#button-two").attr("class", "btn");
        $("#button-one").attr("class", "btn");
        $("#box-one").attr("class", "hide");
        $("#box-two").attr("class", "hide");
        $("#box-three").attr("class", "show");
    });
});
$(document).ready(function(){
    $("#load").click(function(){
        $(this).attr("class", "hide");
        $("#load-link").attr("class", "hide");
        $("#row-four").attr("class", "");
        $("#row-five").attr("class", "");
        $("#row-six").attr("class", "");
        $("#row-seven").attr("class", "");
        $("#row-eight").attr("class", "");
        $("#row-nine").attr("class", "");
    });
});