$(document).ready(function(){
    //open the mobile menu by clicking the burger icon
   $(".burger-nav").on("click", function(){
       
       $("#top_nav").toggleClass("open");
       
   });
    //closing the mobile window
    $("a").on("click", function(){
       
       $("#top_nav").removeClass("open");
       
   });
    //adding the sub menu to the mobile menu
   // $( "#burger-sub-nav" ).appendTo( $( "#menu-item-123" ) );
    $("#home-menu").prependTo("#menu-odin-main-menu");
//    $('#home-menu').css('display', 'block');
    alert('test'); 
});

//smooth scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});

