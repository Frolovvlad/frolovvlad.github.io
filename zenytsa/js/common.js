/* ----------------------------------------------------------------
                [ Закрытие Меню ]
-----------------------------------------------------------------*/


const menu = document.querySelector('.mob-menu'),
	links = document.querySelectorAll('.menu-link'),
	openMenu = document.querySelector('.navbar-toggler'),
	closeMenu = document.querySelector('.menu-close');

for (let link of links) {
	link.addEventListener('click', () => {
		menu.classList.remove('show');
	})
}

openMenu.addEventListener('click', () => {
	menu.classList.add("show");
})

closeMenu.addEventListener('click', () => {
	menu.classList.remove("show");
})


/* ----------------------------------------------------------------
                [ Owl Carousel]
-----------------------------------------------------------------*/

$(document).ready(function () {
	$(".owl-carousel").owlCarousel({
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		loop: true,
		dots: false,
		nav: false,
		responsiveClass: true,
		responsive:{
			0:{
				items:2,
			},
			600:{
				items:3,
			},
			800:{
				items:4,
			}
		}
	});
});

/* ----------------------------------------------------------------
                [ --- ]
-----------------------------------------------------------------*/