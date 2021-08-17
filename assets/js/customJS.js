// Declare variables
var menuButtonWrap = document.querySelector( '.menu-button-wrap' )
var mainMenu = document.querySelector( '#primary-mobile' )
var menuItems = document.querySelectorAll( '#primary-mobile .main-menu a' )
var closeMenuButton = document.querySelector( '#close-menu' )
var hamburgerIcon = document.querySelector( '.hamburger' )
var closeUpdateBrowserButton = document.querySelector( '#btnCloseUpdateBrowser' )
var outdatedBrowserWarning = document.querySelector( '#outdated' )
var heroFilter = document.querySelector( '.home .hero-filter' )

window.onload = function() {

	// Add event listeners for interactions
	menuButtonWrap.addEventListener( 'click', toggleMobileMenu );
	closeMenuButton.addEventListener( 'click', toggleMobileMenu );
	if ( document.body.contains( outdatedBrowserWarning ) ) {
		closeUpdateBrowserButton.addEventListener(
			'click',
			closeOutdatedBrowserWarning
		);
	}

	// Declare all functions
	function toggleMobileMenu() {
		mainMenu.classList.toggle( 'nav-open' );
		hamburgerIcon.classList.toggle( 'is-active' );

		//for the link animation
		if ( mainMenu.classList.contains( 'nav-open' ) ) {
			function navContent( index ) {
				menuItems[index].style.transition =
					'opacity .2s .3s ease-in-out, transform .6s cubic-bezier(0.32, 0.08, 0.24, 1)';
				menuItems[index].style.opacity = '1';
				menuItems[index].style.transform = 'translateX(0)';

				if ( index < menuItems.length - 1 ) {
					setTimeout( () => {
						navContent( ++index );
					}, 100 );
				}
			}
			navContent( 0 );
		} else {
			Array.from( menuItems ).forEach( ( item ) => {
				item.style = '';
			});
		}
	}

	function closeOutdatedBrowserWarning() {
		outdatedBrowserWarning.classList.add( 'none' );
	}
};

// Hide main navigation on scroll
$( document ).ready( function() {
	'use strict';

	var c,
		currentScrollTop = 0,
		navbar = $( '.site-header' );

	$( window ).scroll( function() {
		var a = $( window ).scrollTop();
		var b = navbar.height();

		currentScrollTop = a;

		if ( c < currentScrollTop && a > b + b ) {
			navbar.addClass( 'scroll-up' );
		} else if ( c > currentScrollTop && ! ( a <= b ) ) {
			navbar.removeClass( 'scroll-up' );
		}
		c = currentScrollTop;
	});
});

function contentAnimation() {

	if ( document.body.contains( heroFilter ) ) {
		var tl = gsap.timeline();
		tl.to( heroFilter, {
			filter: 'grayscale(0)',
			ease: 'power3.easeInout',
			duration: 3,
			delay: 1
		});
	}
}

contentAnimation();
