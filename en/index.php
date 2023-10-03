<?php
	$currentPage = 'home';
	include('components/head.php');
?>

<div id='opening'>
	<div class='bg'>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>

<section id='home-banner' class='top-banner'>

	<div class='bg'>
		<div class='play-pause'>
			<video autoplay playsinline muted loop class='lazy' preload='none'>
				<source data-src='../assets/videos/banner.mp4'>
			</video>
		</div>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<h1 class='text-bigger'>
					Efficient <br />
					solutions
				</h1>

				<p class='text-medium'>
					to boost agribusiness growth
				</p>

				<button class='green-light-button magnet top-scroll'>
					<span>
						Explore
					</span>
				</button>

			</div>
		</div>
	</div>
</section>

<section id='top-box'>
	<div class='container'>
        <div class='row'>

			<div class='col-md-6 col-md-push-6 right'>

				<div class='image image-01'>
					<img data-src='../assets/img/smiling-man-crop-fields.jpg' alt='Essence Business' class='lazy cover parallax-img' />
				</div>

				<div class='image image-02' data-speed='1.2'>
					<img data-src='../assets/img/hand-grains.jpg' alt='Essence Business' class='lazy cover parallax-img' />
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<h2 id='about' class='text-bigger'>
					Who <br />
					We Are
				</h2>

				<div class='line'></div>

				<p class='text-big'>
					Since 2016, we have consolidated our expertise as specialists.
				</p>

				<p class='featured no-space'>
					<span>
						Accounting, Financial and Tax Consultancy in the Agro sector,
					</span>
				</p>

				<p class='desc'>
					as well as in fertilizer imports and grain exports. Our focus is on providing personalized and efficient solutions to drive our clients' growth and success.
				</p>

				<a href='<?php echo($about); ?>' class='blue-button magnet'>
					<span>
						Learn More
					</span>
				</a>

			</div>

		</div>
	</div>
</section>

<section id='parallax'>
	<img data-src='../assets/img/grains.jpg' alt='Grains' class='lazy cover parallax-img' />
</section>

<section id='services'>
	<div class='horizontal-scroll'>

		<div class='slide'>
			<div class='wrapper'>

				<h2 class='text-bigger reveal-text'>
					Discover<br />
					our<br />
					services
				</h2>

				<div class='scroll'>
					<div class='inner'>
						<div class='white'></div>
					</div>
				</div>

			</div>
		</div>

		<div class='slide slide-01'>

			<a href='<?php echo($importation); ?>' class='image'>
				<img data-src='../assets/img/services-01.jpg' alt='Import' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Import
				<span></span>
			</h3>

			<a href='<?php echo($importation); ?>' class='blue-button magnet'>
				<span>
					Discover
				</span>
			</a>

		</div>

		<div class='slide slide-02'>

			<a href='<?php echo($exportation); ?>' class='image'>
				<img data-src='../assets/img/services-02.jpg' alt='Export' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Export
				<span></span>
			</h3>

			<a href='<?php echo($exportation); ?>' class='blue-button magnet'>
				<span>
					Discover
				</span>
			</a>

		</div>

		<div class='slide slide-03'>

			<a href='<?php echo($transports); ?>' class='image'>
				<img data-src='../assets/img/services-03.jpg' alt='Transport and Cargo' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Transport and Cargo
				<span></span>
			</h3>

			<a href='<?php echo($transports); ?>' class='blue-button magnet'>
				<span>
					Discover
				</span>
			</a>

		</div>

		<div class='slide slide-04'>

			<a href='<?php echo($courses); ?>' class='image'>
				<img data-src='../assets/img/services-04.jpg' alt='Courses and Training' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Courses and Training
				<span></span>
			</h3>

			<a href='<?php echo($courses); ?>' class='blue-button magnet'>
				<span>
					Discover
				</span>
			</a>

		</div>

		<div class='slide slide-05'>

			<a href='<?php echo($fuel); ?>' class='image'>
				<img data-src='../assets/img/services-05.jpg' alt='Fuels' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Fuels
				<span></span>
			</h3>

			<a href='<?php echo($fuel); ?>' class='blue-button magnet'>
				<span>
					Discover
				</span>
			</a>

		</div>

	</div>
</section>

<section id='world'>

	<div class='bg'>
		<img data-src='../assets/img/hands.jpg' alt='Essence for a supportive world' class='lazy cover parallax-img' />
	</div>

	<div class='container container-big'>
        <div class='row'>
			<div class='col-md-10 col-lg-8 col-xl-6'>

				<h2 class='text-bigger reveal-text'>
					Essence for a supportive world
				</h2>

				<p class='desc'>
					We firmly believe in the importance of making a difference in our community and contributing to a better world. Therefore, we are proud to support and collaborate with non-governmental organizations (NGOs) who are working hard to promote worthy causes.
				</p>

				<a href='<?php echo($social); ?>' class='blue-button magnet'>
					<span>
						Learn More
					</span>
				</a>

			</div>
		</div>
	</div>
</section>

<section id='contact'>
	<div class='container container-big'>
        <div class='row'>
			<div class='col-12'>
				<div class='box'>
					<div class='row'>

						<div class='col-md-6 left'>

							<p class='text-big'>
								<b>
									We work to boost the success of your operation
								</b>
							</p>

							<p class='desc'>
								and face the sector’s challenges in an efficient and innovative way.
							</p>

						</div>

						<div class='col-md-6 right'>

							<p>
								Count on us to receive professional and dedicated assistance at every stage of the process.
							</p>

							<a href='<?php echo($contact); ?>' class='blue-button magnet'>
								<span>
									Contact Us
								</span>
							</a>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('components/footer.php');?>