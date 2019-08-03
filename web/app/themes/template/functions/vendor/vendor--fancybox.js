jQuery('[data-fancybox]').fancybox({
  afterShow : function( instance, current ) {
    current.opts["$orig"].closest(".flickity-enabled").flickity( 'select', current.index , false, true);
  }
});

jQuery('[data-flickity]').on('dragStart.flickity', function() { jQuery('.flickity-slider figure').css('pointer-events', 'none')});

jQuery('[data-flickity]').on('dragEnd.flickity', function() { jQuery('.flickity-slider figure').css('pointer-events', 'all')});


/*
jQuery('[data-fancybox], a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"]').fancybox({
  caption : function( instance, item ) {
      var caption = jQuery(this).attr('title') || '';
      caption = (caption.length ? caption : '');
      return caption;
  }});

jQuery('a[href*="watch?v"]').fancybox();
*/
