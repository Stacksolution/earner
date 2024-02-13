"user strict";

// Preloader
$(window).on("load", function () {
	$(".preloader").fadeOut(1000);
});

//Menu Dropdown
$("ul>li>.sub-menu").parent("li").addClass("has-sub-menu");

$(".menu li a").on("click", function () {
	var element = $(this).parent("li");
	if (element.hasClass("open")) {
		element.removeClass("open");
		element.find("li").removeClass("open");
		element.find("ul").slideUp(300, "swing");
	} else {
		element.addClass("open");
		element.children("ul").slideDown(300, "swing");
		element.siblings("li").children("ul").slideUp(300, "swing");
		element.siblings("li").removeClass("open");
		element.siblings("li").find("li").removeClass("open");
		element.siblings("li").find("ul").slideUp(300, "swing");
	}
});

// Responsive Menu
var headerTrigger = $(".header-trigger");
headerTrigger.on("click", function () {
	$(".menu").toggleClass("active");
	$(".overlay").toggleClass("active");
});

// Overlay Event
var over = $(".overlay");
over.on("click", function () {
	$(".menu").removeClass("active");
	$(".overlay").removeClass("active");
});


$(".sidebar-menu li a").on("click", function (e) {
	$(".sidebar-submenu").removeClass("active");
	$(this).siblings(".sidebar-submenu").toggleClass("active");
});

$(".sidebar-submenu").parent().addClass("has-submenu");

let elem = document.documentElement;
/* View in fullscreen */
function openFullscreen() {
	if (elem.requestFullscreen) {
		elem.requestFullscreen();
	} else if (elem.mozRequestFullScreen) {
		/* Firefox */
		elem.mozRequestFullScreen();
	} else if (elem.webkitRequestFullscreen) {
		/* Chrome, Safari and Opera */
		elem.webkitRequestFullscreen();
	} else if (elem.msRequestFullscreen) {
		/* IE/Edge */
		elem.msRequestFullscreen();
	}
}

/* Close fullscreen */
function closeFullscreen() {
	if (document.exitFullscreen) {
		document.exitFullscreen();
	} else if (document.mozCancelFullScreen) {
		/* Firefox */
		document.mozCancelFullScreen();
	} else if (document.webkitExitFullscreen) {
		/* Chrome, Safari and Opera */
		document.webkitExitFullscreen();
	} else if (document.msExitFullscreen) {
		/* IE/Edge */
		document.msExitFullscreen();
	}
}



$(".dash-sidebar-toggler").on("click", function () {
	$(".dashboard-sidebar").toggleClass("active");
});

$(".dash-sidebar-close").on("click", function () {
	$(".dashboard-sidebar").removeClass("active");
});

let clickOne = document.getElementById("dashboard-sidebar");
if (clickOne) {
	$("body").on("click", function (e) {
		let clickTwo = document.getElementById("dash-sidebar-toggler");

		if (clickOne !== e.target && !clickOne.contains(e.target) && clickTwo !== e.target && !clickTwo.contains(e.target)) {
			$(".dashboard-sidebar").removeClass("active");
		}
	});
}

