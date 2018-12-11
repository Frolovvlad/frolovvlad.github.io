/* ----------------------------------------------------------------
            [ Вызов ( Scrollit ) ]
----------------------------------------------------------------*/

$.scrollIt({
	upKey: 38, // key code to navigate to the next section
	downKey: 40, // key code to navigate to the previous section
	easing: 'swing', // the easing function for animation
	scrollTime: 600, // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null, // function(pageIndex) that is called when page is changed
	topOffset: -150 // offste (in px) for fixed top navigation
});


/* ----------------------------------------------------------------
                [ Закрытие Меню ]
-----------------------------------------------------------------*/


const nav = document.querySelector('nav'),
	links = nav.querySelectorAll('.nav-item'),
	toggler = nav.querySelector('.navbar-toggler'),
	collapse = nav.querySelector('.navbar-collapse');

for (let link of links) {
	link.addEventListener('click', () => {
		toggler.classList.toggle('collapsed');
		toggler.dataset.ariaExpanded = false;
		collapse.classList.toggle('show');
	})
}

/* ----------------------------------------------------------------
                [ Owl Carousel]
-----------------------------------------------------------------*/

$(document).ready(function () {
	$(".owl-carousel").owlCarousel({
		margin: 30,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		loop: true,
		dots: false,
		nav: true,
		navText: ["<img src='../img/arrow.png'>","<img src='../img/arrow.png'>"],
		responsiveClass: true,
		items: 3,
	});
});


/* ----------------------------------------------------------------
                [ Bacc call ]
-----------------------------------------------------------------*/

$(document).ready(function () {
	const buttons = document.querySelectorAll(".book");
	const backCall = document.querySelector('.back-call');
	const blur = document.querySelector('.blur');
	const thanks = document.querySelector('.thanks');
	const closeBlur = document.querySelector('.close-blur');

	for(let btn of buttons)	{
		btn.addEventListener('click', event => {
			event.preventDefault();

			blur.classList.add("show");
			backCall.classList.add("show");
		})
	}

	closeBlur.addEventListener('click', ev => {
		blur.classList.remove("show");
		backCall.classList.remove("show");
		thanks.classList.remove("show");
	})
});