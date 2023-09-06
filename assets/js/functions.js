// register split text
gsap.registerPlugin(ScrollTrigger, SplitText, ScrollSmoother)

const body = document.body
const select = (e) => document.querySelector(e)
const selectAll = (e) => document.querySelectorAll(e)
const selectId = (id) => document.getElementById(id)
const vh = (coef) => window.innerHeight * (coef/100)
const vw = (coef) => window.innerWidth * (coef/100)

// prevent barba from double clicking buttons more than once
// https://stackoverflow.com/a/36794629/4658966
function isDoubleClicked(e) {

	// if already clicked return TRUE to indicate this click is not allowed
	if (e.data('isclicked')) return true

	// mark as clicked for 1 second
	e.data('isclicked', true)
	setTimeout(function () {
		e.removeData('isclicked')
	}, 300)

	// return FALSE to indicate this click was allowed
	return false
}

// init all click, mouseover and keyup functions
function initClickAndKeyFunctions() {

	// make anchor links scroll smoothy
	$('.sliding-link').click(function(e) {
		if (isDoubleClicked($(this))) return
		e.preventDefault()
		var aid = $(this).attr('href')
		$('html, body').animate({ scrollTop: $(aid).offset().top }, 1000)
	})

	// top scroll link
	$('.top-scroll').click(function(e) {
		if (isDoubleClicked($(this))) return
		e.preventDefault()

		if ($(window).width() > 993) {
			$('html, body').animate({ scrollTop: $('body').offset().top + vh(135) }, 1000)
		} else {
			$('html, body').animate({ scrollTop: $('body').offset().top + vh(97) }, 1000)
		}
	})

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
	}, '-=.5')

	// open / close fs menu
	$('.open-fs').click(function(){
		if (isDoubleClicked($(this))) return
		fsMenu.play()
	})

	$('.close-fs, #fs-menu .bg, #fs-menu a').click(function(){
		if (isDoubleClicked($(this))) return
		fsMenu.reverse()
	})

	// close all opened menus when pressing the ESC key
	$(document).keyup(function(e) {
		if (isDoubleClicked($(this))) return
		if(e.key === 'Escape') {
			$('body').removeClass('fs-menu-open')
			fsMenu.reverse()
		}
	})

	// open / close fs menu sub menu
	$('#fs-menu .menu .has-sub p, #fs-menu .menu .has-sub svg').click(function(){
		if (isDoubleClicked($(this))) return
		$(this).siblings('.sub').slideToggle()
		$(this).parent('.has-sub').children('svg').toggleClass('active')
	})

	// faq open / close
	$('.accordion .question').click(function(){
		if (isDoubleClicked($(this))) return

		var that = $(this)

		if (that.hasClass('active')) {
			$('.accordion .question').removeClass('active')
			$('.accordion .answer').slideUp()

			setTimeout(function(){
				that.removeClass('active')
				that.siblings('.answer').slideUp()
			}, 10)
		} else {
			$('.accordion .question').removeClass('active')
			$('.accordion .answer').slideUp()
			
			setTimeout(function(){
				that.addClass('active')
				that.siblings('.answer').slideDown()
			}, 10)
		}

		setTimeout(function(){
			ScrollTrigger.refresh()
		}, 450)
	})

	// magnet links
    if ($(window).width() > 993) {
        const links = selectAll('.magnet')
        const animateLink = function(e){
            const link = this.querySelector('span')
            const { offsetX: x, offsetY: y } = e
            const { offsetWidth: width, offsetHeight: height } = this

            intensity = 50
            xMove = x / width * (intensity * 2) - intensity
            yMove = y / height * (intensity * 2) - intensity
            link.style.transform = 'translate(' + xMove + 'px,' + yMove + 'px)'

            if(e.type == 'mouseleave') link.style.transform = ''
        }

        links.forEach(link => {
            link.addEventListener('mousemove', animateLink)
            link.addEventListener('mouseleave', animateLink)
        })
    }

	// close whatsapp button
	$('.close-whats').click(function(){
		if (isDoubleClicked($(this))) return
		$('#floating-whatsapp').fadeOut()
	})

	// check if the uploaded file (on the work with us page) has more than 5mb
	$('#file').on('change', function() {
        if (this.files.length > 0 && this.files[0].size > 5 * 1024 * 1024) {
            alert('O arquivo excede o tamanho máximo de 5MB')
            $(this).val('')
        }
    })

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
	
	let currentScroll = 0
	let isScrollingDown = true
	var topMenu = document.getElementById('top-menu')

	$('#top-menu').addClass('fixed')

	window.addEventListener('scroll', function(){
	
		if ( window.pageYOffset > currentScroll ) {
			isScrollingDown = true
			topMenu.classList.remove('fixed')
		} else {
			isScrollingDown = false
			topMenu.classList.add('fixed')
		}
		
		currentScroll = window.pageYOffset
		
	})
}

// validate footer newsletter
function validateForms() {
	if ($('.form-validate').length) {
		$('.form-validate').each(function () {
			var theForm = $(this)

			// initialize the jquery validation plugin for the form
			theForm.validate({
				errorPlacement: function (error, element) {
					error.appendTo(element.closest('.form-line'))
					error.addClass('error-msg')
				},
				highlight: function(element) {
					$(element).closest('.form-line').addClass('error')
				},
				unhighlight: function(element) {
					$(element).closest('.form-line').removeClass('error')
				},
				submitHandler: function(form) {
					let originalForm = $(form).get(0)
					let dataparam = new FormData(originalForm)

					// check if the form has an upload field and attach the file
					if ($('#file').length) {
						let attachment = $("#file")[0].files[0]
						dataparam.append('attachment', attachment)
					}

					$.ajax({
						type: 'POST',
						// this is the localhost location of the php file (comment when going live)
						url: location.origin + '/clients/essence-business/assets/php/sender.php',
						// and this if the final location of the php file (comment the code above, uncomment this one and rename it accordingly)
						// url: location.origin + '/_temp/assets/php/sender.php',
						data: dataparam,
						dataType: 'html',
                		crossDomain: true,
						async: true,
						cache: false,
						contentType: false,
						processData: false,
						beforeSend: function() {
							theForm.addClass('sending')
						},
						success: function(response) {
							theForm[0].reset()
							select('.contact-success').click()
							//console.log("success", response)
						},
						error: function(e) {
							select('.contact-error').click()
							//console.log("Unsuccessful:", e)
						},
						complete: function() {
							theForm.removeClass('sending')
						}
					})
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

	tl.set('html', {
		cursor: 'wait',
	})

	tl.set('.page-transition .icon svg', {
		y: '110%'
	})

	tl.set('body', {
		overflow: 'hidden',
	})

	tl.set('.page-transition', {
		pointerEvents: 'auto'
	})

	tl.to('.page-transition > div', {
		scaleY: 1,
		stagger: .1
	})

	tl.to('.page-transition .icon svg', {
		y: 0
	}, '-=.5')

}

// page transition out
function pageTransitionOut() {

	var tl = gsap.timeline()
	
	tl.set('main .once-in', {
		y: '10vh',
		autoAlpha: 0
	})

	tl.to('.page-transition .icon svg', {
		y: '-110%',
		delay: .5
	})

	tl.to('.page-transition > div', {
		y: '-110%',
		stagger: .1
	}, '-=.5')

	tl.to('.page-transition', {
		pointerEvents: 'none',
		duration: 0
	})

	tl.to('main .once-in', {
		duration: 1.5,
		autoAlpha: 1,
		y: 0,
		ease: 'Expo.easeOut',
		clearProps: 'all'
	}, '-=.425')

	tl.to('html', {
		cursor: 'auto',
		duration: 0
	})

	tl.to('body', {
		overflow: 'visible',
		duration: 0
	})

	tl.to('.page-transition > div', {
		clearProps: 'all',
		duration: 0
	})
}

// delay function
function delay(n) {
	n = n || 2000
	return new Promise((done) => {
		setTimeout(() => {
			done()
		}, n)
	})
}

// init scroll smoother
function initScrollSmoother() {
	if (ScrollTrigger.isTouch !== 1) {
		const smoother = ScrollSmoother.create({
			wrapper: '#smooth-content',
			content: '#smooth-content .main-wrap',
			smooth: 2,
			speed: .75,
			smoothTouch: .1,
			effects: true,
			normalizeScroll: true
		})

		// parallax effect
		smoother.effects('.parallax-img', {
			speed: 'auto'
		})

		// pause / play scroll smoother on some determined actions
		$('.open-fs').click(function(){
			if (isDoubleClicked($(this))) return
			smoother.paused(true)
		})

		$('#fs-menu a, .close-fs').click(function(){
			if (isDoubleClicked($(this))) return
			smoother.paused(false)
		})

		$(document).keyup(function(e) {
			if (isDoubleClicked($(this))) return
			if(e.key === 'Escape') {
				smoother.paused(false)
			}
		})

		// scroll to the top of the page on page load
		smoother.scrollTop(0)

	} else {

		// scroll to the top of the page on page load (on mobile)
		window.scrollTo(0, 0)
	}
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

	// fixed top banner banner + expanding box animation
	if ($(window).width() > 993) {
		setTimeout(function() {

			ScrollTrigger.create({
				trigger: '#main-content',
				pin: '.top-banner .bg',
				start: 'top top',
				end: '+=' + vh(100)
			})
	
			gsap.from('#top-box', {
				y: '-5rem',
				scale: .9,
				ease: 'none',
				scrollTrigger: {
					trigger: '#main-content',
					start: '1 top',
					end: '+=' + vh(90),
					scrub: 2,
					onComplete: () => {
						ScrollTrigger.refresh()
					}
				}
			})
			
		}, 50)
	}

	// check if the #top-box has the class featured and apply the animation to it
	if ($('#top-box .featured').length) {
		gsap.to('#top-box .featured span', {
			backgroundPositionX: 0,
			ease: 'none',
			scrollTrigger: {
				trigger: '#top-box .featured',
				scrub: 2,
				start: 'top 90%',
				end: 'bottom 75%'
			}
		})
	}

	// expanding blue contact box
	if ($('.has-blue-box .bottom .box').length) {
		gsap.from('.has-blue-box .bottom .box', {
			scale: .75,
			y: '10vh',
			ease: 'none',
			scrollTrigger: {
				trigger: '.has-blue-box .bottom',
				scrub: 2,
				start: 'top 110%',
				end: '50% 85%'
			}
		})
	}

	// full slider effects inside the exportation page
	if ($('.full-section.full-section-slider').length) {
		if ($(window).width() > 993) {
			ScrollTrigger.create({
				trigger: '.full-section.full-section-slider',
				pin: '.full-section.full-section-slider .full-slider',
				pinSpacing: false,
				start: 'top top',
				endTrigger: '.has-blue-box',
				end: 'top bottom'
			})

			gsap.to('.full-section.full-section-slider .full-slider .photo:nth-child(1)', {
				autoAlpha: 0,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-02',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			gsap.to('.full-section.full-section-slider .pin-02', {
				autoAlpha: 1,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-02',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			gsap.to('.full-section.full-section-slider .full-slider .photo:nth-child(2)', {
				autoAlpha: 0,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-03',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			gsap.to('.full-section.full-section-slider .pin-03', {
				autoAlpha: 1,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-03',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			gsap.to('.full-section.full-section-slider .full-slider .photo:nth-child(3)', {
				autoAlpha: 0,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-04',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			gsap.to('.full-section.full-section-slider .pin-04', {
				autoAlpha: 1,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-04',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			gsap.to('.full-section.full-section-slider .full-slider .photo:nth-child(4)', {
				autoAlpha: 0,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-05',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			gsap.to('.full-section.full-section-slider .pin-05', {
				autoAlpha: 1,
				scrollTrigger: {
					trigger: '.full-section.full-section-slider .pin-05',
					start: '0 60%',
					toggleActions: 'restart pause resume reverse'
				}
			})
		}
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

// disable console warnings and show copyright message
function initCopyright() {
	console.clear()
	const message = 'Design Paanda Design 🔗 www.paandadesign.com.br \nCode Senz Design 🔗 www.senzdsn.com'
	const style = 'color: #f8f8f8; font-size: 12px; font-weight: bold; background-color: #0d0e13; padding: 8px'
	console.log(`%c${message}`, style)
}

// custom mouse cursor
function initMouseCursor() {

	let links = selectAll('a, button')
	let mouse = document.getElementById('mouse')

	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseover', function(){
			gsap.to(mouse, {
				scale: 2,
				width: '3rem',
				height: '3rem',
				marginTop: '-1.5rem',
				marginLeft: '-1.5rem'
			})
		})
	}
	
	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseleave', function(){
			gsap.to(mouse, {
				scale: 1,
				width: '1.5rem',
				height: '1.5rem',
				marginTop: '-.75rem',
				marginLeft: '-.75rem'
			})
		})
	}

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
	const opening = gsap.timeline({
		delay: .5
	})

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

	opening.set('#top-box', {
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

	opening.to('#top-box', {
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
			initScript()
		},

		async leave(data) {
			pageTransitionIn(data.current)
			await delay(1100)
			data.current.container.remove()
			let triggers = ScrollTrigger.getAll()
			triggers.forEach(function (trigger) {
				trigger.kill(true)
			})
		},

		async beforeEnter() {
			if ($('#main-content').attr('class').includes('home')) {
				$('#opening').remove()
			}
			initScrollSmoother()
			ScrollTrigger.refresh()
		},

		async enter(data) {
			pageTransitionOut(data.next)
			initScript()
		}
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
			afterEnter() {

				// horizontal scroll
				if ($(window).width() > 993) {
					let sections = gsap.utils.toArray('.horizontal-scroll .slide')

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
				}
			}
		}, {
			namespace: 'team',
			afterEnter() {
				if ($(window).width() > 993) {
					ScrollTrigger.create({
						trigger: '.team-slider',
						pin: '.team-slider .photos',
						pinSpacing: false,
						start: 'top top',
						endTrigger: '#footer',
						end: 'top bottom'
					})

					gsap.to('.team-slider .photos .photo:nth-child(1)', {
						autoAlpha: 0,
						scrollTrigger: {
							trigger: '.team-slider .pin-02',
							start: '0 60%',
							toggleActions: 'restart pause resume reverse'
						}
					})

					gsap.to('.team-slider .pin-02', {
						autoAlpha: 1,
						scrollTrigger: {
							trigger: '.team-slider .pin-02',
							start: '0 60%',
							toggleActions: 'restart pause resume reverse'
						}
					})

					gsap.to('.team-slider .photos .photo:nth-child(2)', {
						autoAlpha: 0,
						scrollTrigger: {
							trigger: '.team-slider .pin-03',
							start: '0 60%',
							toggleActions: 'restart pause resume reverse'
						}
					})

					gsap.to('.team-slider .pin-03', {
						autoAlpha: 1,
						scrollTrigger: {
							trigger: '.team-slider .pin-03',
							start: '0 60%',
							toggleActions: 'restart pause resume reverse'
						}
					})
				}
			}
		}
	]
})