(function($) {
	"use strict";
	
	// ______________ PerfectScrollbar
	const ps3 = new PerfectScrollbar('.default-scrollbar', {
		useBothWheelAxes:true,
		suppressScrollX:true,
	});
	
	// ______________ Horizonatal
	const ps4 = new PerfectScrollbar('.hor-scrollbar', {
		useBothWheelAxes:true,
	});
	
})(jQuery);