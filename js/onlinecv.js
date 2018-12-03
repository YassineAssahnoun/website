// ===== Scroll to Top ====
jQuery(window).scroll(function() {
  if(window.outerWidth > 950) {
    if (jQuery(this).scrollTop() >= 50) {
        jQuery('#return-to-top').fadeIn(200);
    } else {
        jQuery('#return-to-top').fadeOut(200);
    }
  }
});

jQuery('#return-to-top').click(function() {
    jQuery('body,html').animate({
        scrollTop : 0
    }, 'slow');
});

// ==== Scroll to Div ====

jQuery(document).ready(function(){

  jQuery('ul#navigation_text').find('a#navigation_non_flag').click(function(event) {

      event.preventDefault();

      var href = jQuery(this).attr('href');
      var anchor = jQuery(href);
        if(window.outerWidth < 900) {
          var targetOffset = jQuery(anchor).offset().top - 50;
        }
        else {
          var targetOffset = jQuery(anchor).offset().top - 30;
        }
      jQuery('html,body').animate({
          scrollTop: targetOffset
      } , 'slow');

  });

});

// ==== Menu responsive ====

function myFunction() {
    var x = document.getElementById("navigation_text");
    if (x.className === "cv_navigation") {
        x.className += " responsive";
    } else {
        x.className = "cv_navigation";
    }
}
