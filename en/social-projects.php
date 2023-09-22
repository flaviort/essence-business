<?php
	$currentPage = 'social';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/hands-holding-leaves.jpg' alt='Social Projects' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>

				<p class='text-medium'>
					Social Projects
				</p>

				<h1 class='text-bigger'>
					<span>
						EAS - Active and Solidarity Essence
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
					<img data-src='../assets/img/child-smiling.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					<b>We firmly believe in the importance of making a difference in our community and contributing to a better world.</b><br /><br />

					Therefore, we are proud to support and collaborate with non-governmental organizations (NGOs) who are working hard to promote worthy causes. We believe that NGOs play a crucial role in several sectors, whether in protecting the environment, supporting needy communities, education, health or other equally relevant areas.<br /><br />

					<b>We recognize the dedication and positive impact that these organizations have on our society, and that is why we seek to establish lasting partnerships with them.</b>
				</p>

			</div>

		</div>
	</div>
</section>

<section class='full-section'>

	<div class='big-image'>
		<img data-src='../assets/img/social.jpg' alt='Social Commitment' class='lazy cover parallax-img'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<div class='floating-icon' data-speed='1.025'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('../assets/svg/floating-icon-text-en.svg'); ?>
					</div>

					<?php echo file_get_contents('../assets/svg/icon.svg'); ?>

				</div>

				<h2 class='text-bigger reveal-text white'>
					Social Commitment
				</h2>

				<p>
					We collaborate with NGOs through financial donations, volunteer programs and other forms of support, depending on the specific needs of each organization.<br /><br />

					Our goal is to contribute significantly to the initiatives and projects they develop, helping to drive their mission and achieve positive results.<br /><br />

					Our social commitment is not limited to partnerships with NGOs. We also encourage our employees to get involved in voluntary actions and social causes that are meaningful to them.<br /><br />

					<b>We believe in the power of individual and collective engagement to create positive changes in our surroundings.</b>
				</p>

			</div>

		</div>
	</div>
</section>

<section class='has-blue-box'>
	<div class='container'>
		<div class='row'>

			<div class='col-md-6 left'>

				<h2 class='text-bigger white reveal-text'>
					Projects we support
				</h2>

				<p>
					<b>Join us on this journey of social responsibility and positive transformation.</b><br /><br />

					We believe that, together, we can make a difference and build a better future for everyone.
				</p>

			</div>

			<div class='col-md-6 right has-logos'>

				<a href='https://pequenoprincipe.org.br/' target='_blank' class='logo'>
					<img data-src='../assets/img/pequeno-principe.png' alt='Hospital Pequeno Príncipe' class='lazy'>
				</a>

				<a href='https://www.funbeca.com.br/' target='_blank' class='logo'>
					<img data-src='../assets/img/hnsa.png' alt='Hospital Nossa Senhora Aparecida' class='lazy'>
				</a>

				<a href='https://www.erastinho.com.br/' target='_blank' class='logo'>
					<img data-src='../assets/img/erastinho.png' alt='Hospital Erastinho' class='lazy'>
				</a>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>