/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.main-menu a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
  // Header background color.
	wp.customize( 'header_color', function( value ) {
		value.bind( function( to ) {
      $( '.site-header' ).css( {
        'background-color': to
      } );
		} );
	} );
  // Body text color.
  wp.customize( 'text_color', function( value ) {
    value.bind( function( to ) {
      $( 'p' ).css( {
        'color': to
      } );
    } );
  } );
  // Link text color.
  wp.customize( 'link_color', function( value ) {
    value.bind( function( to ) {
      $( 'a' ).css( {
        'color': to
      } );
    } );
  } );
} )( jQuery );
