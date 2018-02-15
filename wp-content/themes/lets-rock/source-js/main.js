jQuery(document).ready(function() {
    jQuery('#go').click( function(event){
        event.preventDefault()
        jQuery('#overlay').fadeIn(1000,
            function(){
                jQuery('#modal_form')
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 1000)
            })
    })
    jQuery('#modal_close, #overlay').click( function(){
        jQuery('#modal_form')
            .animate({opacity: 0, top: '45%'}, 1000,
                function(){ // пoсле aнимaции
                    jQuery(this).css('display', 'none')
                    jQuery('#overlay').fadeOut(1000)
                }
            )
    })
})

jQuery(window).ready(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    controlNav: false,
    directionNav: false
  })
})

jQuery(window).ready(function() {
  jQuery('.flexslider2').flexslider({
    animation: "slide",
    controlsContainer: jQuery(".custom-controls-container"),
    customDirectionNav: jQuery(".custom-navigation a"),
    controlNav: false,
  })
})

jQuery(window).ready(function() {
  jQuery('.flexslider3').flexslider({
    animation: "slide",
    controlsContainer: jQuery(".custom-controls-container"),
    customDirectionNav: jQuery(".custom-navigation-two a")
  })
})