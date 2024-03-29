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
				<source data-src='assets/videos/banner.mp4'>
			</video>
		</div>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<h1 class='text-bigger'>
					Soluções <br />
					eficientes
				</h1>

				<p class='text-medium'>
					para impulsionar o crescimento do agronegócio
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
					<img data-src='assets/img/smiling-man-crop-fields.jpg' alt='Essence Business' class='lazy cover parallax-img' />
				</div>

				<div class='image image-02' data-speed='1.2'>
					<img data-src='assets/img/hand-grains.jpg' alt='Essence Business' class='lazy cover parallax-img' />
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<h2 id='about' class='text-bigger'>
					Quem <br />
					Somos
				</h2>

				<div class='line'></div>

				<p class='text-big'>
					Desde 2016, consolidamos nossa expertise como especialistas.
				</p>

				<p class='featured no-space'>
					<span>
						Consultorias Contábeis, Financeiras e Fiscais no setor Agro,
					</span>
				</p>

				<p class='desc'>
					assim como nas importações de fertilizantes e exportações de grãos. Nosso foco está em proporcionar soluções personalizadas e eficientes para impulsionar o crescimento e o sucesso de nossos clientes. 
				</p>

				<a href='<?php echo($about); ?>' class='blue-button magnet'>
					<span>
						Saiba Mais
					</span>
				</a>

			</div>

		</div>
	</div>
</section>

<section id='parallax'>
	<img data-src='assets/img/grains.jpg' alt='Grãos' class='lazy cover parallax-img' />
</section>

<section id='services'>
	<div class='horizontal-scroll'>

		<div class='slide'>
			<div class='wrapper'>

				<h2 class='text-bigger reveal-text'>
					Conheça<br />
					nossos<br />
					serviços
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
				<img data-src='assets/img/services-01.jpg' alt='Importação' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Importação
				<span></span>
			</h3>

			<a href='<?php echo($importation); ?>' class='blue-button magnet'>
				<span>
					Conheça
				</span>
			</a>

		</div>

		<div class='slide slide-02'>

			<a href='<?php echo($exportation); ?>' class='image'>
				<img data-src='assets/img/services-02.jpg' alt='Exportação' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Exportação
				<span></span>
			</h3>

			<a href='<?php echo($exportation); ?>' class='blue-button magnet'>
				<span>
					Conheça
				</span>
			</a>

		</div>

		<div class='slide slide-03'>

			<a href='<?php echo($transports); ?>' class='image'>
				<img data-src='assets/img/services-03.jpg' alt='Transporte e Carga' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Transporte e Carga
				<span></span>
			</h3>

			<a href='<?php echo($transports); ?>' class='blue-button magnet'>
				<span>
					Conheça
				</span>
			</a>

		</div>

		<div class='slide slide-04'>

			<a href='<?php echo($courses); ?>' class='image'>
				<img data-src='assets/img/services-04.jpg' alt='Cursos e Treinamentos' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Cursos e Treinamentos
				<span></span>
			</h3>

			<a href='<?php echo($courses); ?>' class='blue-button magnet'>
				<span>
					Conheça
				</span>
			</a>

		</div>

		<div class='slide slide-05'>

			<a href='<?php echo($fuel); ?>' class='image'>
				<img data-src='assets/img/services-05.jpg' alt='Combustíveis' class='lazy cover' />
			</a>

			<h3 class='text-big'>
				Combustíveis
				<span></span>
			</h3>

			<a href='<?php echo($fuel); ?>' class='blue-button magnet'>
				<span>
					Conheça
				</span>
			</a>

		</div>

	</div>
</section>

<section id='world'>

	<div class='bg'>
		<img data-src='assets/img/hands.jpg' alt='Essence por um mundo solidário' class='lazy cover parallax-img' />
	</div>

	<div class='container container-big'>
        <div class='row'>
			<div class='col-md-10 col-lg-8 col-xl-6'>

				<h2 class='text-bigger reveal-text'>
					Essence por um mundo solidário
				</h2>

				<p class='desc'>
					Nós acreditamos firmemente na importância de fazer a diferença em nossa comunidade e contribuir para um mundo melhor. Por isso, temos o orgulho de apoiar e colaborar com organizações não governamentais (ONGs) que estão trabalhando arduamente para promover causas nobres.
				</p>

				<a href='<?php echo($social); ?>' class='blue-button magnet'>
					<span>
						Saiba Mais
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
									Trabalhamos para impulsionar o sucesso de sua operação 
								</b>
							</p>

							<p class='desc'>
								e enfrentar os desafios do setor de forma eficiente e inovadora. 
							</p>

						</div>

						<div class='col-md-6 right'>

							<p>
								Conte conosco para receber assistência profissional e dedicada em todas as etapas do processo.
							</p>

							<a href='<?php echo($contact); ?>' class='blue-button magnet'>
								<span>
									Fale Conosco
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