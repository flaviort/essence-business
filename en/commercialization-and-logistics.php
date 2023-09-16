<?php
	$currentPage = 'logistics';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/silos-sunset.jpg' alt='Commercialization and Logistics' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>

				<h1 class='text-bigger small'>
					<span>
						Commercialization and Logistics
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
					<img data-src='../assets/img/train-grains.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					Our expertise in selling grains for the export market also enables us to carry out safe sales for our customers in the domestic market.<br /><br />

					We have participated in negotiations with physical volume or business indications, as well as comparisons and analyzes on the crushing/export parity or in the commercialization of taxed products.<br /><br />

					Our high level of relationships with producers and traders/crushers has provided excellent negotiations for both business participants.<br /><br />

					<b>The crushing of soybeans and the result of the extraction of their derived products such as high protein (HIPRO) or low protein (LOWPRO) bran, soybean oil, lecithin require special attention for their commercialization, as all products have their added values and have high demand in the domestic market.</b>
				</p>

			</div>

		</div>
	</div>
</section>

<section class='title-desc bg-blue has-texture'>
	<div class='container'>
        <div class='row'>

			<div class='col-lg-5 left'>

				<h2 class='text-bigger white reveal-text'>
					Corn
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p class='white'>
					The corn commodity with the highest production in Brazil, with a price equivalent to approximately 40% of the value per ton of soybeans, is a commodity both used in the preparation of animal feed, in the extraction of alcohol and in the preparation of feed supplements (DDGS - dry grain distilled and soluble) with high protein content.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='full-section'>

	<div class='big-image'>
		<img data-src='../assets/img/harvest.jpg' alt='Commercialization' class='lazy cover parallax-img position-right'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<h2 class='text-bigger reveal-text white'>
					Commercialization
				</h2>

				<p>
					<b>We operate heavily in the commercialization of national and imported fertilizers</b>, such as Urea, Potassium Chloride (KCL), MAP and DAP and others, both for small volumes (above 32 tons) and for larger volumes - above 15,000 tons.<br /><br />

					<b>We have strong partners for the marketing</b> of formulated products, limestone, granulated gypsum and others.<br /><br />

					<b>Essence Business professionals</b> regardless of commercialized grains (soy, corn, wheat, cotton, sorghum, sunflower and others) or fertilizers (urea, potassium chloride and others) <b>are fully attentive to the market and its marketing demands.</b><br /><br />

					<b>We always seek the best result for the producer and the end customer</b>, analyzing the cost per ton at origin, nationalized product or in the grain bag, spread included, logistics and port costs, etc.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='has-blue-box'>
	<div class='container'>
		<div class='row'>

			<div class='col-12 bottom'>

				<div class='floating-icon' data-speed='1.05'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('../assets/svg/floating-icon-text-en.svg'); ?>
					</div>

					<?php echo file_get_contents('../assets/svg/icon.svg'); ?>

				</div>

				<div class='box'>

					<p>
						Contact us to request quotes, obtain additional information or clarify any questions. We look forward to being your reliable partner in exporting high-quality grains.
					</p>

					<a href='<?php echo($contact); ?>' class='hollow-white-button magnet'>
						<span>
							Click here
						</span>
					</a>
					
				</div>
			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>