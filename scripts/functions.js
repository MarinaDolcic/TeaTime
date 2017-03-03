var j = jQuery.noConflict();

jQuery(document).ready(function(){
    //open the mobile menu by clicking the burger icon
   jQuery(".burger-nav").on("click", function(){
       
       jQuery("#top_nav").toggleClass("open");
       
   });
    //closing the mobile window
    jQuery("a").on("click", function(){
       
       $("#top_nav").removeClass("open");
       
   });
    //adding the sub menu to the mobile menu
   // $( "#burger-sub-nav" ).appendTo( $( "#menu-item-123" ) );
    jQuery("#home-menu").prependTo("#menu-odin-main-menu");
//    $('#home-menu').css('display', 'block');
    
});

//smooth scrolling
jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});

