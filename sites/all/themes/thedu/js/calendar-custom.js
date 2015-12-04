(function($){
	$(document).ready(function () {
		$('[data-pclass]').each(function(){
			classs = $(this).data();
			$(this).parents('.monthview').addClass(classs.pclass);
		});
	});
})(jQuery);