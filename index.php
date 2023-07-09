<?php
	$currentPage = 'home';
	include('components/head.php');
?>

<section id='home-banner' class='once-in'>

	<div class='bg'>
		<div class='play-pause'>
			<video autoplay playsinline muted loop class='lazy' preload='none'>
				<source data-src='assets/videos/video.mp4'>
			</video>
		</div>
	</div>

	<div class='container container-big'>
        <div class='row'>
			<div class='col-12'>
				
				<h1 class='text-bigger'>
					Soluções <br />
					eficientes
				</h1>

				<p class='text-medium'>
					para impulsionar o crescimento do agronegócio
				</p>

				<a href='servicos' class='green-light-button magnet'>
					<span>
						Explore
					</span>
				</a>

			</div>
		</div>
	</div>
</section>

<section id='about'>
	<div class='container'>
        <div class='row'>

			<div class='col-md-6 col-md-push-6 right'>

				<div class='image-01'>
					<img data-src='assets/img/about-01.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

				<div class='image-02'>
					<img data-src='assets/img/about-02.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<h2 class='text-bigger'>
					Quem <br />
					Somos
				</h2>

				<div class='line'></div>

				<p class='text-big'>
					Desde 2016, consolidamos nossa expertise como especialistas.
				</p>

				<p class='featured'>
					<span>
						&nbsp;Consultorias Contábeis, Financeiras e Fiscais no setor Agro,&nbsp;
					</span>
				</p>

				<p class='desc'>
					assim como nas importações de fertilizantes e exportações de grãos. Nosso foco está em proporcionar soluções personalizadas e eficientes para impulsionar o crescimento e o sucesso de nossos clientes. 
				</p>

				<a href='sobre' class='blue-button magnet'>
					<span>
						Saiba Mais
					</span>
				</a>

			</div>

		</div>
	</div>
</section>

<section id='parallax' style='height: 200vh; background: green'>
	
</section>

<section id='services'>
	<div class='container container-big'>
        <div class='row'>
			<div class='col-12'>

			</div>
		</div>
	</div>
</section>

<section id='world'>
	<div class='container container-big'>
        <div class='row'>
			<div class='col-12'>

			</div>
		</div>
	</div>
</section>

<section id='contact'>
	<div class='container container-big'>
        <div class='row'>
			<div class='col-12'>

			</div>
		</div>
	</div>
</section>

<?php include('components/footer.php');?>