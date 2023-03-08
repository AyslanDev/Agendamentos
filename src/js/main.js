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

    var slides = $('.slide');
    var numSlides = slides.length;
    var currentSlide = 0;

    // Define a classe 'active' para o slide atual
    slides.eq(currentSlide).addClass('active');

    // Muda para o próximo slide
    function nextSlide() {
        slides.eq(currentSlide).removeClass('active');
        currentSlide = (currentSlide + 1) % numSlides;
        slides.eq(currentSlide).addClass('active');
    }

    // Muda para o slide anterior
    function prevSlide() {
        slides.eq(currentSlide).removeClass('active');
        currentSlide = (currentSlide - 1 + numSlides) % numSlides;
        slides.eq(currentSlide).addClass('active');
    }

    // Adiciona os eventos de clique aos botões de controle
    $('.prev-slide').on('click', function() {
        prevSlide();
    });

    $('.next-slide').on('click', function() {
        nextSlide();
    });
});

$(document).mousedown(function(e){
    if(e.button === 1){
        return false;
    }
});

$('img').click(function(){

    let idImg = $(this).data('val');
    
    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: 'app/'
    })

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

