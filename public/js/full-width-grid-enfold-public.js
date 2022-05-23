jQuery(document).ready(function ($) {
	window.onresize = function () {
		if (window.innerWidth > 1310) {
			console.log(window.innerWidth);
			var pad = $('body').innerWidth() - 1310;
			pad = pad / 2;
			pad = pad + 'px';
			console.log(pad);
			jQuery('#grid-custom-width').css('padding-left', pad);
			jQuery('#grid-custom-width').css('padding-right', pad);
		} else {

		}
	}
});