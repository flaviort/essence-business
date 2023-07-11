// register split text
gsap.registerPlugin(ScrollTrigger, SplitText, ScrollSmoother)

const body = document.body;
const select = (e) => document.querySelector(e);
const selectAll = (e) => document.querySelectorAll(e);
const selectId = (id) => document.getElementById(id);
const vh = (coef) => window.innerHeight * (coef/100);
const vw = (coef) => window.innerWidth * (coef/100);

// init all click, mouseover and keyup functions
function initClickAndKeyFunctions() {

	// prevent barba from double clicking buttons more than once
	// https://stackoverflow.com/a/36794629/4658966
	function isDoubleClicked(e) {

		// if already clicked return TRUE to indicate this click is not allowed
		if (e.data('isclicked')) return true;
	
		// mark as clicked for 1 second
		e.data('isclicked', true);
		setTimeout(function () {
			e.removeData('isclicked')
		}, 300)
	
		// return FALSE to indicate this click was allowed
		return false;
	}

	// correct label click
	$('label').click(function(e){
		e.stopImmediatePropagation()
	})

	var fsMenu = gsap.timeline({
		paused: true
	})

	fsMenu.to('#fs-menu', {
		pointerEvents: 'all',
		duration: 0
	})

	fsMenu.to('#mouse', {
		borderColor: '#fff',
		duration: 1
	})

	fsMenu.to('#fs-menu .bg div', {
		height: '100%',
		stagger: .1
	}, '-=1')

	fsMenu.to('#fs-menu .close-fs', {
		autoAlpha: 1
	}, '-=.5')

	fsMenu.to('#fs-menu .menu > li', {
		autoAlpha: 1,
		stagger: .1
	})

	// open / close fs menu
	$('.open-fs').click(function(){
		fsMenu.play()
	})

	$('.close-fs, #fs-menu .bg, #fs-menu a').click(function(){
		fsMenu.reverse()
	})

	// close all opened menus when pressing the ESC key
	$(document).keyup(function(e) {
		if(e.key === 'Escape') {
			$('body').removeClass('fs-menu-open')
			fsMenu.reverse()
		}
	})

	// open / close fs menu sub menu
	$('#fs-menu .menu .has-sub p, #fs-menu .menu .has-sub svg').click(function(){
		$('#fs-menu .menu .has-sub .sub').slideToggle()
		$('#fs-menu .menu .has-sub svg').toggleClass('active')
	})

	// faq open / close
	$('.faq-question .question').click(function(){
		if (isDoubleClicked($(this))) return;
		$(this).parent('.faq-question').toggleClass('active')
		$(this).siblings('.answer').slideToggle()
		setTimeout(function(){
			ScrollTrigger.refresh()
		}, 450)
	})

	// magnet links
    if ($(window).width() > 993) {
        const links = selectAll('.magnet')
        const animateLink = function(e){
            const link = this.querySelector('span');
            const { offsetX: x, offsetY: y } = e
            const { offsetWidth: width, offsetHeight: height } = this;

            intensity = 50;
            xMove = x / width * (intensity * 2) - intensity;
            yMove = y / height * (intensity * 2) - intensity;
            link.style.transform = 'translate(' + xMove + 'px,' + yMove + 'px)';

            if(e.type == 'mouseleave') link.style.transform = '';
        }

        links.forEach(link => {
            link.addEventListener('mousemove', animateLink)
            link.addEventListener('mouseleave', animateLink)
        })
    }
}

// init lazyload
function initLazyLoad() {
	const lazyLoadInstance = new LazyLoad({ 
		elements_selector: '.lazy',
		container: select('.main-wrap')
	})

	// refrsh scrolltrigger once an image is loaded
	gsap.utils.toArray('.lazy').forEach(item => {
		item.addEventListener('load', () => {
			if (!item.classList.contains('cover')) {
				ScrollTrigger.refresh()
			}
		})
	})
}

// init fancybox
function initFancybox() {
	Fancybox.bind('[data-fancybox]', {
		autoFocus: false,
		dragToClose: false,
		placeFocusBack: false,
	})
}

// init the top menu
function initTopMenu() {
	
	let currentScroll = 0;
	let isScrollingDown = true;
	var topMenu = document.getElementById('top-menu')

	$('#top-menu').addClass('fixed')

	window.addEventListener('scroll', function(){
	
		if ( window.pageYOffset > currentScroll ) {
			isScrollingDown = true;
			topMenu.classList.remove('fixed');
		} else {
			isScrollingDown = false;
			topMenu.classList.add('fixed');
		}
		
		currentScroll = window.pageYOffset
		
	})
}

// validate footer newsletter
function validateForms() {
	if(selectAll('.form-validate')) {

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

// change the fs menu active item according to the url
function updateMenu() {
	$('#fs-menu .menu a').removeClass('active')

	setTimeout(function(){

		if($('#main-content').hasClass('home')) {
			$('#fs-menu .menu > li:first-child a').addClass('active')
		}
	}, 100)
}

// page transition in
function pageTransitionIn() {

	var tl = gsap.timeline()

	tl.set('.page-transition', {
		pointerEvents: 'auto'
	})

}

// page transition out
function pageTransitionOut() {

	var tl = gsap.timeline();
	
	tl.set('main .once-in', {
		y: '50vw',
	})

	tl.to('.page-transition', {
		pointerEvents: 'none',
		duration: 0
	})

	tl.to('main .once-in', {
		duration: 1,
		y: '0vh',
		stagger: .05,
		ease: 'Expo.easeOut',
		clearProps: 'true'
	}, '-=.55')
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

// init scroll smoother
function initScrollSmoother() {
	const smoother = ScrollSmoother.create({
		wrapper: '#smooth-content',
		content: '#smooth-content .main-wrap',
		smooth: 2,
		effects: true,
		normalizeScroll: true
	})

	// parallax effect
	smoother.effects('.parallax-img', {
		speed: 'auto'
	})

	// scroll buttons
	$('#home-banner button').click(function(){
		gsap.to(smoother, {
			scrollTop: Math.min(ScrollTrigger.maxScroll(window), smoother.offset('#about', '75 top')),
			duration: 2
		})
	})

	// pause / play scroll smoother on some determined actions
	$('.open-fs').click(function(){
		smoother.paused(true)
	})

	$('#fs-menu a, .close-fs').click(function(){
		smoother.paused(false)
	})

	$(document).keyup(function(e) {
		if(e.key === 'Escape') {
			smoother.paused(false)
		}
	})
}

// here goes all the scroll related animations
function scrollTriggerAnimations() {

    // reveal text animation
	if(select('.reveal-text')) {

        const texts = selectAll('.reveal-text')
    
        texts.forEach(text => {
            
            // reset if needed
            if(text.anim) {
                text.anim.progress(1).kill()
            	text.split.revert()
            }

            text.split = new SplitText(text, { 
                type: 'lines, words, chars',
                linesClass: 'split-line'
            })

            // set up the anim
            text.anim = gsap.from(text.split.chars, {
                scrollTrigger: {
                    trigger: text,
                    toggleActions: 'restart pause resume reverse',
                    start: 'top 95%'
                },
                duration: .75, 
                ease: 'circ.out', 
                y: 100 + '%', 
                stagger: .05
            })
        })
	}
}

// init all the sliders on the website
function initSliders() {

	// init the why choose slider on the homepage
	if(select('.why-choose-slider')) {
		const whyChooseSlider = new Swiper ('.why-choose-slider', {
			slidesPerView: 1,
			loop: true,
			simulateTouch: true,
			allowTouchMove: true,
			autoHeight: true,
			calculateHeight: true,
			spaceBetween: 15,
			pagination: {
				el: '#why-choose .why-choose-nav',
				type: 'bullets',
				clickable: true,
			},
			autoplay: {
				delay: 9750
			},
			breakpoints: {
				767: {
					spaceBetween: 30
				}
			}
		})
	}
}

// disable console warnings and show skyline message
function initCopyright() {
	//console.clear()
	const message = 'Masterpiece by Senz Design 🔗 www.senzdsn.com'
	const style = 'color: #f8f8f8; font-size: 12px; font-weight: bold; background-color: #0d0e13; padding: 8px'
	console.log(`%c${message}`, style)
}

// custom mouse cursor
function initMouseCursor() {

	let links = selectAll('a, button')
	let mouse = document.getElementById('mouse');

	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseover', function(){
			gsap.to(mouse, {
				scale: 2,
				width: '3rem',
				height: '3rem',
				marginTop: '-1.5rem',
				marginLeft: '-1.5rem'
			})
		});
	};
	
	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseleave', function(){
			gsap.to(mouse, {
				scale: 1,
				width: '1.5rem',
				height: '1.5rem',
				marginTop: '-.75rem',
				marginLeft: '-.75rem'
			})
		});
	};

	function moveCircle(e) {
		gsap.to(mouse, .5, {
			x: e.clientX,
			y: e.clientY
		})
	}
	
	window.addEventListener('mousemove', moveCircle)
}

// fire the opening animation
function openingAnimation() {
	const opening = gsap.timeline();

	opening.set('html', {
		cursor: 'wait',
	})

	opening.call(function(){
		initScript()
	})

	opening.to('#top-menu', {
		y: '-110%',
		duration: 0
	})

	opening.set('#home-banner .bg', {
		autoAlpha: 0
	})

	opening.set('#home-banner .col-12', {
		autoAlpha: 0
	})

	opening.set('#about', {
		marginTop: '5rem'
	})

	opening.to('#opening .bg div', {
		y: '-110%',
		stagger: 0.1,
		duration: 2
	})

	opening.to('html', {
		cursor: 'auto',
		duration: 0
	})

	opening.to('#home-banner .bg', {
		autoAlpha: 1,
		duration: 1
	}, '-=1')

	opening.to('#about', {
		marginTop: 0,
		duration: 1
	}, '-=1')

	opening.to('#home-banner .col-12', {
		autoAlpha: 1,
		duration: 1
	}, '-=1')

	opening.to('#top-menu', {
		y: 0,
		duration: 1
	}, '-=2')

	opening.call(function(){
		ScrollTrigger.refresh()
		$('#top-menu').addClass('fixed')
	})

	opening.to('#top-menu', {
		clearProps: true,
		duration: 0
	})
}

// fire all scripts on page load
function initScript() {
	initClickAndKeyFunctions()
	initFancybox()
	validateForms()
	initLazyLoad()
	initSliders()
	updateMenu()
	scrollTriggerAnimations()
	initScrollSmoother()
	initCopyright()
	initTopMenu()
	initMouseCursor()
}

// barba
barba.init({
	sync: true,
	timeout: 1000,
	//debug: true,
	transitions: [{
		name: 'default',
		once() {
			initScript();
		},

		async leave(data) {
			pageTransitionIn(data.current)
			await delay(1100)
			data.current.container.remove()
			let triggers = ScrollTrigger.getAll();
			triggers.forEach(function (trigger) {
				trigger.kill(true)
			});
		},

		async enter(data) {
			initScript()
			window.scrollTo(0, 0)
			pageTransitionOut(data.next)
		},

		async afterEnter() {
			ScrollTrigger.refresh()
		},
	}, {
		name: 'opening-animation',
		to: {
			namespace: ['home']
		},
		once() {
			openingAnimation()
		}
	}],

	views: [
		{
			namespace: 'home',
			beforeEnter() {

				// fixed home banner
				ScrollTrigger.create({
					trigger: '#home-banner .bg',
					pin: true,
					start: 'top top',
					end: '+=' + vh(100)
				})

				// expading block about (below the home)
				gsap.from('#about', {
					y: '-5rem',
					borderTopLeftRadius: '0.75rem',
					borderTopRightRadius: '0.75rem',
					scale: .9,
					ease: 'none',
					scrollTrigger: {
						trigger: '#home-banner',
						start: '1 top',
						end: '+=' + vh(90),
						scrub: 2,
						onComplete: () => {
							ScrollTrigger.refresh()
							console.log('test')
						}
					}
				})

				// fill text animation
				gsap.to('#about .featured span', {
					backgroundPositionX: 0,
					ease: 'none',
					scrollTrigger: {
						trigger: '#about .featured',
						scrub: 2,
						start: 'top 90%',
						end: 'bottom 75%'
					}
				})

				// parallax bg in the grains section
				gsap.to('#parallax img', {
					y: '-25%',
					ease: 'none',
					scrollTrigger: {
						trigger: '#parallax',
						scrub: 2,
						start: 'top bottom',
						end: 'bottom top'
					}
				})

				// horizontal scroll
				let sections = gsap.utils.toArray('.horizontal-scroll .slide');

				let horizontalScroll = gsap.to(sections, {
					xPercent: -100 * (sections.length - 1),
					ease: 'none',
					scrollTrigger: {
						trigger: '#services',
						pin: true,
						scrub: 2,
						end: (sections.length - 1) * vh(150)
					}
				})

				gsap.utils.toArray('.horizontal-scroll .slide .text-big span').forEach(item => {
					gsap.to(item, {
						scaleX: 1,
						ease: 'none',
						scrollTrigger: {
							trigger: item,
							containerAnimation: horizontalScroll,
							start: 'left 60%',
							end: 'right center',
							scrub: 2
						}
					})
				})

				gsap.utils.toArray('.horizontal-scroll .slide .image img').forEach(item => {
					gsap.to(item, {
						x: '-=15%',
						ease: 'none',
						scrollTrigger: {
							trigger: item,
							containerAnimation: horizontalScroll,
							start: 'left right',
							end: 'right left',
							scrub: 2
						}
					})
				})

				// parallax bg in the sustainability section
				gsap.to('#world .bg', {
					y: '-25%',
					ease: 'none',
					scrollTrigger: {
						trigger: '#world',
						scrub: 2,
						start: 'top bottom',
						end: 'bottom top'
					}
				})
			},
		}
	]
})