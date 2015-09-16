(function($){
	$(document).ready(function () {

			$(".infoslide").backstretch([
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/1.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/4.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/2.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/3.jpg"    
		  ],
			{duration: 4000,fade:'normal',centeredX:0});

			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );

	});
	Drupal.behaviors.front = {
	  attach: function(context) {    
	      $(function() {
				});
	  }
	}	
})(jQuery);
