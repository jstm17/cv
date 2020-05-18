$(document).ready(function(){

    $(".formulairenom").focus(function(){
        $(this).addClass("inputmousedown")
        $(this).removeClass("inputmouseup formulaireapparition")
    })
    $(".formulairenom").focusout(function(){
        $(this).removeClass("inputmousedown")
        $(this).addClass("inputmouseup")
    })
})
