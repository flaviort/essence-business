<?php
	$currentPage = 'team';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/teamwork.jpg' alt='Experts' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<p class='text-medium'>
					About Us
				</p>

				<h1 class='text-bigger'>
					<span>
						Experts
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

				<div class='floating-icon' data-speed='1.125'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('../assets/svg/floating-icon-text-en.svg'); ?>
					</div>

					<?php echo file_get_contents('../assets/svg/icon.svg'); ?>

				</div>

				<div class='image image-full'>
					<img data-src='../assets/img/shaking-hands-02.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p class='featured'>
					<span>
						Our team is made up of a group of highly qualified and dedicated experts in the field of agribusiness.
					</span>
				</p>

				<p>
					<strong>Each member of our team brings a unique combination of knowledge, experience and passion for the industry.</strong><br /><br />

					Our experts have solid academic backgrounds and are constantly up to date with the latest trends, research and technological advances in agribusiness. They have expertise in several areas, including International Trade, International Execution, Finance, Accounting, Tax and much more.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='title-desc bg-blue white'>
	<div class='container'>
        <div class='row'>

			<div class='col-lg-5 left'>

				<h2 class='text-bigger reveal-text'>
					Differential
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p>
					We believe that the combination of <strong>specialized knowledge, practical experience and passion for agribusiness</strong> is what sets us apart. We are committed to helping our customers achieve their goals, maximize their productivity and profitability, while promoting sustainability and responsible development.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='team-slider'>

	<div class='photos'>

		<div class='photo'>
			<img data-src='../assets/img/team-marcelo.jpg' alt='Marcelo Vieira' class='lazy cover'>
		</div>

		<div class='photo'>
			<img data-src='../assets/img/team-pedro.jpg' alt='Pedro Diehl' class='lazy cover'>
		</div>

		<div class='photo'>
			<img data-src='../assets/img/team-elielson.jpg' alt='Elielson Vulczak' class='lazy cover'>
		</div>

	</div>

	<div class='container'>
        <div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 infos'>

				<h2 class='text-bigger white big-title'>
					<b>
						Meet our team
					</b>
				</h2>

				<div class='photo'>
					<img data-src='../assets/img/team-marcelo.jpg' alt='Marcelo Vieira' class='lazy cover'>
				</div>

				<div class='block pin-01'>

					<h3 class='text-big name'>
						<b>
							Marcelo Vieira
						</b>
					</h3>

					<p class='position'>
						<b>
							+ 20 years of experience in Agro
						</b>
					</p>

					<p class='desc'>
						Graduated in Accounting Sciences with an MBA in Business Management and a Certificate in People Management. Experience in multinationals in the United States, France, Switzerland and Italy. Controllership Manager with extensive experience in implementing systems and monitoring results. Ability to prepare international reports, Budgets, Forecasts, among others. Experience in companies such as LANSING, AMAGGI, Limagrain, Fugro and others.
					</p>

					<a href='https://www.linkedin.com/in/marcelo-vieira/' target='_blank' class='hover-underline-white'>
						Linkedin
					</a>

				</div>

				<div class='photo'>
					<img data-src='../assets/img/team-pedro.jpg' alt='Pedro Diehl' class='lazy cover'>
				</div>

				<div class='block pin-02'>

					<h3 class='text-big name'>
						<b>
							Pedro Diehl
						</b>
					</h3>

					<p class='position'>
						<b>
							+ 35 years of experience in Agro
						</b>
					</p>

					<p class='desc'>
						Graduated in Business Administration from PUC/RS. Extensive experience as a broker in the grains and fertilizers market. Acting as a market consultant giving biweekly interviews for agribusiness channels and acting directly as a broker with large clients and producers.
					</p>

					<a href='https://www.linkedin.com/in/pedro-diehl-730757148/' target='_blank' class='hover-underline-white'>
						Linkedin
					</a>

				</div>

				<div class='photo'>
					<img data-src='../assets/img/team-elielson.jpg' alt='Elielson Vulczak' class='lazy cover'>
				</div>

				<div class='block pin-03'>

					<h3 class='text-big name'>
						<b>
							Elielson Vulczak
						</b>
					</h3>

					<p class='position'>
						<b>
							+ 15 years of experience in administrative processes
						</b>
					</p>

					<p class='desc'>
						Graduating in Accounting Sciences. Extensive experience in implementing operating systems such as TOTVS, for example. Administrative and operational process consultant visualizing results statements by activity, product, line of business. Experience in large companies such as Fugro Geotecnia, Agrinvest Commodities, Lansing Brasil among others.
					</p>

					<a href='https://www.linkedin.com/in/eavulczaki/' target='_blank' class='hover-underline-white'>
						Linkedin
					</a>

				</div>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>