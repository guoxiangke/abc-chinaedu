(function($){
	$(document).ready(function () {

			$("#hero").backstretch(Drupal.settings.pathToTheme.pathToTheme + "/img/hero.jpg",
			{duration: 4000,fade:'normal',centeredX:0});
			$("#hero0").backstretch(Drupal.settings.pathToTheme.pathToTheme + "/img/hero0.jpg",
			{duration: 4000,fade:'normal',centeredX:0});
			$("#hero1").backstretch(Drupal.settings.pathToTheme.pathToTheme + "/img/hero0.jpg",
			{duration: 4000,fade:'normal',centeredX:0});

			$(".infoslide").backstretch([
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/1.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/4.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/2.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/3.jpg"    
		  ],
			{duration: 4000,fade:'normal',centeredX:0});
			    $(window).scroll(function() {
			        var scroll = $(window).scrollTop();
			        if (scroll >= 100) {
			            $("header#navbar").addClass('smaller');
			            $("header#navbar").removeClass("navbar-bigger");
			        } else {
			            $("header#navbar").removeClass("smaller");
			            $("header#navbar").addClass('navbar-bigger');
			        }
			    });

			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
	});
Drupal.behaviors.front = {
  attach: function(context) {    
      $(function() {
			});
  	}
  }
})(jQuery);
