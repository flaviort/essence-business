<?php
	$currentPage = 'about';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/silos.jpg' alt='Who We Are' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<p class='text-medium'>
					About Us
				</p>

				<h1 class='text-bigger'>
					<span>
						Who We Are
					</span>
				</h1>

				<button class='scroll top-scroll'>
					<div class='inner'>
						<div class='white'></div>
					</div>
				</button>

			</div>
		</div>
	</div>
</section>

<section id='top-box' class='light'>
	<div class='container'>
        <div class='row'>

			<div class='col-md-6 col-md-push-6 right'>
				<div class='image image-full'>
					<img data-src='../assets/img/smiling-man.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>
			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					<strong>Since 2016, we have been specialists in Accounting, Financial and Tax consultancy in Agro and in fertilizer imports and grain exports</strong>, dedicated to offering personalized and efficient solutions to boost the growth and success of our clients. With in-depth knowledge and experience of precious inputs, including urea, we understand the challenges and unique opportunities that the market presents.<br /><br />

					Our team is made up of passionate experts in the sector, with <strong>more than 20 years of experience</strong>, who closely follow trends, technological innovations and market trends, to offer the best practices and strategies. We are always up to date with the latest information, having extensive national and international experience such as the United States, Italy, France, Switzerland, Asia and the United Arab Emirates where we also have large commercial partners, customers, suppliers and investors.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='title-desc bg-green'>
	<div class='container'>
        <div class='row'>

			<div class='col-lg-5 left'>

				<h2 class='text-bigger white reveal-text'>
					Our Approach
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p>
					Our personalized, results-oriented approach aims to <b>maximize operational efficiency</b>, reduce risks and increase the profitability of your business.
				</p>

			</div>

		</div>
	</div>
</section>

<section id='parallax'>
	<img data-src='../assets/img/grains-harvest.jpg' alt='Grains' class='lazy cover parallax-img' />
</section>

<section class='title-desc bg-blue has-texture'>
	<div class='container'>
        <div class='row'>

			<div class='col-lg-5 left'>

				<h2 class='text-bigger white reveal-text'>
					The Group
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<div class='floating-icon' data-speed='1.025'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('../assets/svg/floating-icon-text-en.svg'); ?>
					</div>

					<?php echo file_get_contents('../assets/svg/icon.svg'); ?>

				</div>

				<p class='white'>
					<strong>The ESSENCE BUSINESS Group</strong> is prepared to face the specific challenges of your operation. We value partnership with our clients, working side by side to identify growth opportunities, overcome obstacles and achieve lasting results.<br /><br />

					<strong>Count on us to provide expert solutions</strong>, cutting-edge knowledge and unwavering commitment. We are ready to be part of your journey and help you reach the full potential of your venture in the agribusiness sector.
				</p>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>