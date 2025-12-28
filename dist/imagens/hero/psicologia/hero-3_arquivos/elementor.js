( function( $ ) {
	var pxl_widget_elementor_handler = function( $scope, $ ) {

	};
	$( window ).on( 'elementor/frontend/init', function() {
        //elementorFrontend.hooks.addAction( 'frontend/element_ready/global', pxl_widget_elementor_handler );
        // elementorFrontend.waypoint($('.ss-light'), function (direction) {
        // 	$('.pxl-wapper').removeClass('body-dark').addClass('body-light');
        // 	console.log(direction);
        // });
        // elementorFrontend.waypoint($('.ss-dark'), function (direction) {
        // 	$('.pxl-wapper').removeClass('body-light').addClass('body-dark');

        // });
        // $('.ss-light').waypoint(function(direction) {
        // 	if (direction == 'down') {
        // 		$( '.pxl-wapper' ).addClass('body-light');
        // 	}
        // 	else {
        // 		$( '.pxl-wapper' ).removeClass('body-light');
        // 	}
        // 	$( '.pxl-wapper' ).toggleClass('body-light');
        // }, { 
        // 	offset: '0%' 
        // });
        // $('.ss-dark').waypoint(function(direction) {
        // 	if (direction == 'down') {
        // 		$( '.pxl-wapper' ).addClass('body-dark');
        // 	}
        // 	else {
        // 		$( '.pxl-wapper' ).removeClass('body-dark');
        // 	}
        // 	$( '.pxl-wapper' ).toggleClass('body-dark');
        // }, { 
        // 	offset: '0%' 
        // });
        
    } );
} )( jQuery );