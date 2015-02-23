(function ($) {

/**
 * Responsive menu
 */	  
Drupal.behaviors.menuRespond = {
	attach: function() {
	
		var widthSmallMobile = window.matchMedia('only screen and (max-width: 44em)');
		
		if (widthSmallMobile.matches == true) {
			$('.menu li').hide();
			$('#block-system-main-menu').prepend('<div class="menu-icon close"><div class="menu-button">Navigation</div></div>');
			
			$('.menu-icon').click(function() {
				$('.menu li').slideToggle('slow');
				$('.menu-icon').toggleClass('open');	
				$('.menu-icon').toggleClass('close');
			});
		}
	
	}
};

Drupal.behaviors.teamDetails = {
	attach: function() {
		
		$('.views-field-field-team-bio').addClass('close');
		$('.views-field-field-team-bio').click(function() {
			$(this).toggleClass('open');
			$(this).toggleClass('close');
		});

	}
};

})(jQuery);