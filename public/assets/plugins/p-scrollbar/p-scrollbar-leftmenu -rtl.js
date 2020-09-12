(function($) {
	"use strict";
	
	// ______________ PerfectScrollbar
	const ps = new PerfectScrollbar('.app-sidebar', {
		useBothWheelAxes:false,
		suppressScrollX:false,
	});
	const ps1 = new PerfectScrollbar('.sidebar-right', {
		useBothWheelAxes:false,
		suppressScrollX:false,
	});
	
})(jQuery);