// open menu
$(function () {
	$(".menu-button-wrap").click(function (e) {
		$(".main-menu-wrapper-mobile").toggleClass("open");
	});
});
// close menu
$(function () {
	$("#close-menu").click(function (e) {
		$(".main-menu-wrapper-mobile").toggleClass("open");
	});
});
// Hamburger menu open animation
$(function () {
	$(".menu-button-wrap").click(function (e) {
		$(".hamburger").toggleClass("is-active");
	});
});
// Hamburger menu close animation
$(function () {
	$("#close-menu").click(function (e) {
		$(".hamburger").toggleClass("is-active");
	});
});
// Open search modal
$(function () {
	$("#search").click(function (e) {
		$(".search-form-wrap").toggleClass("search-open");
	});
});
// Close search modal
$(function () {
	$(".search-close").click(function (e) {
		$(".search-form-wrap").toggleClass("search-open");
	});
});
// Close search modal
$(function () {
	$(".site-content").click(function (e) {
		$(".search-form-wrap").removeClass("search-open");
	});
});
// Fade In To Top Button
$(window).scroll(function () {
	if ($(this).scrollTop() > 400) {
		$(".to-top").fadeIn();
	} else {
		$(".to-top").fadeOut();
	}
});
// outdated browser
$(function () {
	$("#btnCloseUpdateBrowser").click(function (e) {
		$("#outdated").addClass("none");
		e.stopPropagation();
	});
});
// Hide main navigation on scroll
$(document).ready(function () {
	"use strict";

	var c,
		currentScrollTop = 0,
		navbar = $(".site-header");

	$(window).scroll(function () {
		var a = $(window).scrollTop();
		var b = navbar.height();

		currentScrollTop = a;

		if (c < currentScrollTop && a > b + b) {
			navbar.addClass("scroll-up");
		} else if (c > currentScrollTop && !(a <= b)) {
			navbar.removeClass("scroll-up");
		}
		c = currentScrollTop;
	});
});

// Set preloader on page load
$(document).ready(function () {
	$("body").addClass("loaded");
});

// Back to Top button
(function () {
	var backTop = document.getElementsByClassName("to-top")[0],
		offset = 300, // browser window scroll (in pixels) after which the "back to top" link is shown
		offsetOpacity = 1200, //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		scrollDuration = 700,
		scrolling = false;

	if (backTop) {
		//update back to top visibility on scrolling
		window.addEventListener("scroll", function (event) {
			if (!scrolling) {
				scrolling = true;
				!window.requestAnimationFrame
					? setTimeout(checkBackToTop, 250)
					: window.requestAnimationFrame(checkBackToTop);
			}
		});

		//smooth scroll to top
		backTop.addEventListener("click", function (event) {
			event.preventDefault();
			!window.requestAnimationFrame
				? window.scrollTo(0, 0)
				: Util.scrollTo(0, scrollDuration);
		});
	}

	function checkBackToTop() {
		var windowTop = window.scrollY || document.documentElement.scrollTop;
		windowTop > offset
			? Util.addClass(backTop, "cd-top--is-visible")
			: Util.removeClass(backTop, "cd-top--is-visible cd-top--fade-out");
		windowTop > offsetOpacity && Util.addClass(backTop, "cd-top--fade-out");
		scrolling = false;
	}
})();
// Add reading progress indicator to blog posts
$(document).ready(function () {
	var getMax = function () {
		return $(document).height() - $(window).height();
	};

	var getValue = function () {
		return $(window).scrollTop();
	};

	if ("max" in document.createElement("progress")) {
		// Browser supports progress element
		var progressBar = $("progress");

		// Set the Max attr for the first time
		progressBar.attr({ max: getMax() });

		$(document).on("scroll", function () {
			// On scroll only Value attr needs to be calculated
			progressBar.attr({ value: getValue() });
		});

		$(window).resize(function () {
			// On resize, both Max/Value attr needs to be calculated
			progressBar.attr({ max: getMax(), value: getValue() });
		});
	} else {
		var progressBar = $(".progress-bar"),
			max = getMax(),
			value,
			width;

		var getWidth = function () {
			// Calculate width in percentage
			value = getValue();
			width = (value / max) * 100;
			width = width + "%";
			return width;
		};

		var setWidth = function () {
			progressBar.css({ width: getWidth() });
		};

		$(document).on("scroll", setWidth);
		$(window).on("resize", function () {
			// Need to reset the Max attr
			max = getMax();
			setWidth();
		});
	}
});
