/* Tooltip */

$('.tip').tooltip();

/* Flex slider */

$(window).load(function() {
   $('.flexslider').flexslider({
      direction: "vertical",
      controlNav: false,
      directionNav: false,
      pauseOnHover: true,
      slideshowSpeed: 3500      
   });
});

/* Twitter */

jQuery(function($){
   $(".tweet").tweet({
      username: "ashokramesh90",
      join_text: "auto",
      avatar_size: 0,
      count: 3,
      auto_join_text_default: "we said,",
      auto_join_text_ed: "we",
      auto_join_text_ing: "we were",
      auto_join_text_reply: "we replied to",
      auto_join_text_url: "we were checking out",
      loading_text: "loading tweets...",
      template: "{text}"
   });
}); 

/* Testimonial */

$(document).ready(function() {
   $('.testi').cycle({ 
       fx:     'fade', 
       speed:  'fast', 
       timeout: 0, 
       next:   '#next', 
       prev:   '#prev',
       pause: 1,
       fit: 1
   });
});

/* Portfolio */


/* Isotype */

// cache container
var $container = $('#portfolio');
// initialize isotope
$container.isotope({
  // options...
});

// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});

jQuery("a[class^='prettyPhoto']").prettyPhoto({
overlay_gallery: false, social_tools: false
});
