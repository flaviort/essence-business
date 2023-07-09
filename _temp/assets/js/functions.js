// register split text
gsap.registerPlugin(SplitText)

// init all click, mouseover and keyup functions
function initClickAndKeyFunctions() {

	// prevent barba from double clicking buttons more than once
	// https://stackoverflow.com/a/36794629/4658966
	function isDoubleClicked(e) {
		// if already clicked return TRUE to indicate this click is not allowed
		if (e.data("isclicked")) return true;
	
		// mark as clicked for 1 second
		e.data("isclicked", true);
		setTimeout(function () {
			e.removeData("isclicked");
		}, 300);
	
		// return FALSE to indicate this click was allowed
		return false;
	}

	// make anchor links scroll smoothy
	$('.sliding-link').click(function(e) {
		e.preventDefault()
		var aid = $(this).attr('href')
		$('html, body').animate({ scrollTop: $(aid).offset().top }, 'slow')
	})

	// correct label click
	$('label').click(function(e){
		e.stopImmediatePropagation()
	})

	// open / close fs menu
	$('.open-fs').click(function(){
		if (isDoubleClicked($(this))) return;
		$(this).toggleClass('opened')
		$('body').toggleClass('fs-menu-open')
	})

	$('#fs-menu a, #top-menu a').click(function(){
		if (isDoubleClicked($(this))) return;
		$('.open-fs').removeClass('opened')
		$('body').removeClass('fs-menu-open')
	})

	// close all opened menus when pressing the ESC key
	$(document).keyup(function(e) {
		if(e.key === 'Escape') {
			$('body').removeClass('fs-menu-open')
			$('.open-fs').removeClass('opened')
		}
	})

	// faq open / close
	$('.faq-question .title').click(function(){
		if (isDoubleClicked($(this))) return;
		$(this).parent('.faq-question').toggleClass('active')
		$(this).siblings('.desc').slideToggle()
		setTimeout(function(){
			ScrollTrigger.refresh()
		}, 450)
	})

	// show / hide password
	$('.show-hide-pass').click(function(){
		if (isDoubleClicked($(this))) return;
		var that = $(this);
		that.toggleClass('active');

		setTimeout(function() {
			if (that.hasClass('active')){
				that.siblings('input').attr('type','text');
			} else {
				that.siblings('input').attr('type','password');
			}
		}, 30)
	})
}

// init lazyload
function initLazyLoad() {
	const lazyLoadInstance = new LazyLoad({ 
		elements_selector: '.lazy',
	});

	gsap.utils.toArray('.lazy').forEach(item => item.addEventListener('load', () => ScrollTrigger.refresh()));
}

// init fancybox
function initFancybox() {
	Fancybox.bind('[data-fancybox]', {
		autoFocus: false,
		dragToClose: false,
		placeFocusBack: false,
	})
}

// validate all forms
function validateForms() {
	if(document.querySelector(".form-validate")) {

		const form = $('.form-validate')

		$.each(form, function() {
			$(this).validate({
				errorPlacement: function(error, element) {
					error.appendTo(element.closest('.form-line'))
					error.addClass('error-msg')
				},
				highlight: function (element){
					$(element).closest('.form-line').addClass('error')
				},
				unhighlight: function (element){
					$(element).closest('.form-line').removeClass('error')
				}
			})
		})
	}
}

// scroll related animations
function scrollTriggerAnimations() {
	

}

// init all sliders
function initSliders() {

	if(document.querySelector('.portfolio-slider')) {
		if(window.innerWidth > 768) {
			const portfolio_slider = new Swiper('.portfolio-slider', {
				slidesPerView: 2,
				loop: true,
				simulateTouch: true,
				allowTouchMove: true,
				autoHeight: false,
				calculateHeight: false,
				spaceBetween: 20,
				breakpoints: {
					1201: {
						slidesPerView: 3,
						spaceBetween: 20,
						loop: true,
					}
				},

				// fix the loop for when you have lazyloaded images inside it
				// https://github.com/verlok/vanilla-lazyload/blob/master/demos/swiper.html
				on: {
					afterInit: (swiper) => {
						new LazyLoad({
							container: swiper.el,
							cancel_on_exit: false
						});
					}
				}
			});

			setTimeout(function(){
				portfolio_slider.update()
			}, 10);
		}
	}

}

// play videos when in view
function playVideoInView() {

	let allVideoDivs = gsap.utils.toArray('.play-pause');
  
	allVideoDivs.forEach((videoDiv) => {
  
		let videoElem = videoDiv.querySelector('video')
  
		ScrollTrigger.create({
			trigger: videoElem,
			start: '0% 120%',
			end: '100% -20%',
			onEnter: () => videoElem.play(),
			onEnterBack: () => videoElem.play(),
			onLeave: () => videoElem.pause(),
			onLeaveBack: () => videoElem.pause(),
		});
  
	});
}

// opening animation
function openingAnimation() {
	
}

// page transition out
function pageTransitionOut() {
	
}

// page transition in
function pageTransitionIn() {
	
}

// page transition once
function pageTransitionOnce() {
	
}

// scroll to the top of the page
function scrollTop() {
	window.scrollTo(0, 0);
}

// delay function
function delay(n) {
	n = n || 2000;
	return new Promise((done) => {
		setTimeout(() => {
			done();
		}, n);
	});
}

// fire all scripts on page load
function initScript() {
	initClickAndKeyFunctions();
	validateForms();
	scrollTriggerAnimations();
	initLazyLoad();
	initFancybox();
	initSliders();
	playVideoInView();
	setTimeout(function(){
		scrollTop();
	}, 50)
}

// barba
barba.init({
	sync: true,
	timeout: 7000,
	debug: false,
    transitions: [{
        name: 'page-transition',
		
		once() {
			initScript();
			pageTransitionOnce();
		},

        async leave(data) {
			pageTransitionIn(data.current);
			await delay(495);
			data.current.container.remove();
        },

        async enter(data) {
			pageTransitionOut(data.next);
        },

		async beforeEnter() {
			ScrollTrigger.getAll().forEach(t => t.kill());

			setTimeout(function(){
				initScript()
			}, 10);
		},
    }, {
		name: 'opening-animation',
		to: {
			namespace: ['home']
		},
		once() {
			openingAnimation()
			initScript();
		},
	}],

	// go to a custom 404 page if the user click on a link that return a 404 response status
	/*
	requestError: (trigger, action, url, response) => {
		if (action === 'click' && response.status && response.status === 404) {
		  	barba.go('404');
		}
		return false;
	},
	*/
})