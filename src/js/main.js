$(document).ready(function() {  
    $(".select-multiple").select2({
        maximumSelectionLength: 16
    });
    $(".show1").css("display", "none");
    $(".show2").css("display", "none");
    $(".show1").fadeIn(1500).delay(1000);
    $(".show1").fadeOut(800, function(){
    let scrol = $("#area_escolha").offset().top;
    $(window).scrollTop(scrol)
    }); 
});

$(document).mousedown(function(e){
    if(e.button === 1){
        return false;
    }
});

$("#btn_voltar").click(function(){
    const scrol = $("#img_banner").offset().top;
    $(window).scrollTop(scrol);
    $(".show").css("display", "none");
    $(".show").fadeIn(1100);
});

$("#quadra1").click(function(e){
    alert("quadra1");
});

$("#quadra2").click(function(e){
    alert("quadra2");
});

$("#quadra3").click(function(e){
    alert("quadra3");
});

