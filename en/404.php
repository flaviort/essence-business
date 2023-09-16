<?php
	$currentPage = 'error-404';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/silos-sunset.jpg' alt='Page not Found' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>

				<p class='text-medium'>
					Error 404
				</p>

				<h1 class='text-bigger'>
					<span>
						Page not Found
					</span>
				</h1>

				<a href='./' class='hollow-white-button magnet'>
					<span>
						Home
					</span>
				</a>

			</div>
		</div>
	</div>
</section>

<?php include('components/footer.php');?>