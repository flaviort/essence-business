<?php
	$currentPage = 'services';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/services-01.jpg' alt='Import' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<p class='text-medium'>
					Services
				</p>

				<h1 class='text-bigger'>
					<span>
						Import
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
					<img data-src='../assets/img/ship-grains.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					Here at <b>ESSENCE BUSINESS GROUP</b>, we are committed to providing <b>the best agricultural fertilizers</b> to boost the growth and productivity of your crops.<br /><br />

					As experts in the field, we <b>import a variety of essential fertilizers such as Urea, Potassium Chloride, MAP, DAP</b> and much more.<br /><br />

					<b>Our wide selection of superior fertilizers is carefully selected and sourced from trusted sources around the world.</b>
				</p>

				<p class='featured'>
					<span>
						Everything is certified by renowned companies in the market such as SGS, Control Union and others.
					</span>
				</p>

				<p>
					<b>We are registered with the Ministry of Agriculture, Livestock and Supply (MAPA).</b><br /><br />

					We are committed to ensuring our customers receive top-notch products formulated with the nutrients needed to maximize the potential of their crops.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='full-section'>

	<div class='big-image'>
		<img data-src='../assets/img/fertilizer.jpg' alt='Fertilizers' class='lazy cover parallax-img'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<h2 class='text-bigger reveal-text white'>
					Fertilizers
				</h2>

				<p>
					By <b>importing Urea</b>, we offer a <b>highly efficient nitrogen fertilizer</b> that stimulates healthy plant growth and increases production. <b>Potassium Chloride</b>, in turn, provides a balanced supply of potassium, essential for robust root development and to improve <b>resistance to diseases and environmental stresses.</b><br /><br />

					In addition, we have <b>MAP and DAP fertilizers</b>, which offer a combination of vital nutrients, including nitrogen, phosphorus and potassium, essential for plant development at all growth stages.<br /> <br />

					Our team is always ready to assist you in selecting the fertilizers best suited to your specific needs.<br /><br />

					<b>With an unwavering commitment to quality and an efficient import process, we guarantee that you will receive the fertilizers you order quickly and reliably.</b>
				</p>

			</div>

		</div>
	</div>
</section>

<section class='has-blue-box'>
	<div class='container'>
		<div class='row'>

			<div class='col-md-6 col-md-push-6 right'>

				<div class='floating-icon' data-speed='1.1'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('../assets/svg/floating-icon-text-en.svg'); ?>
					</div>

					<?php echo file_get_contents('../assets/svg/icon.svg'); ?>

				</div>

				<div class='image'>
					<img data-src='../assets/img/biologist.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					By choosing <b>ESSENCE BUSINESS GROUP as your supplier of imported fertilizers</b>, you will be opting for excellent products and exceptional service.<br /><br />

					We are ready to serve customers of all sizes, from small farmers to large agricultural companies, offering personalized solutions for each situation.
				</p>

			</div>

			<div class='col-12 bottom'>
				<div class='box'>

					<p>
						Contact us for more information, request quotes or clarify any questions. We look forward to being your reliable partner in providing premium quality fertilizers.
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