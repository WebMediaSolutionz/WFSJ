$( document ).ready( function () {
	// var scrollPoint = $( 'body' ).attr( 'data-scrollpoint' ) || 349;

	// $( window ).scroll( function() {
	// 	if ( $( this ).scrollTop() > scrollPoint ) {  
	// 		$( '.content' ).addClass( 'buffer' );
	// 		$( '.main_container nav' ).addClass( 'navbar-fixed-top' );
	// 		$( '.small_description' ).addClass( 'hide' );
	// 	} else {
	// 		$( '.content' ).removeClass( 'buffer' );
	// 		$( '.main_container nav' ).removeClass( 'navbar-fixed-top' );
	// 		$( '.small_description' ).removeClass( 'hide' );
	// 	}
	// });

	$( 'body' ).scrollToTop({
		skin: 'cycle' 
	});
});