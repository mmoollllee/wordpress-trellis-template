/*
	<div class="accordion">
		<div class="item active">
			<div class="title"></div>
			<div class="inner">
			</div>
		</div>
		<div class="item">
			<div class="title"></div>
			<div class="inner">
			</div>
		</div>
	</div>
*/

wrapper = jQuery(".accordion");

jQuery(document).ready(function() {
	
	jQuery('.accordion .item .inner').each(function() {
		parent = jQuery(this).parent();
		if ( !parent.hasClass("active")) {
			jQuery(this).hide();
		}
	});
	
/*	wrapper.find(".title").click(function() {
		parent = jQuery(this).parent();
		if ( !parent.hasClass("active")) {
			active = wrapper.find(".active");
			active.find(".inner").slideToggle();
			active.removeClass("active");
			inner = parent.find(".inner");
			parent.addClass("active");
			inner.slideToggle();
		}
	});
*/

  jQuery(document).ready(function() {
    wrapper.find('.title').click(function(){

      //Expand or collapse this panel
      jQuery(this).next().slideToggle('fast').parent().toggleClass("active");

      //Hide the other panels
      //wrapper.find(".inner").not(jQuery(this).next()).slideUp('fast').parent().removeClass("active");

    });
  });


})