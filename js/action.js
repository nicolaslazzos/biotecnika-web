//SELECCION DE IMAGEN EXPANDIDA//
$(function(){
    $(".min").click(function(){
       var name = $(this).attr("src");
       $(".big").attr("src", name);
   }); 
});

$('.carousel-control').click(function(e){
    e.stopPropagation();
    var goTo = $(this).data('slide');
    if(goTo=="prev") {
        $('#myCarousel').carousel('prev'); 
    } else {
        $('#myCarousel').carousel('next'); 
    }
});

//DESPLAZAMIENTO A TRAVES DE LA PAGINA//
$(function(){
    $('.nav-button').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 700);
                return false;
           }
      }
  });
});