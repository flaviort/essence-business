<?php
	$currentPage = 'about';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='assets/img/silos.jpg' alt='Quem Somos' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<p class='text-medium'>
					Sobre Nós
				</p>

				<h1 class='text-bigger'>
					<span>
						Quem Somos
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
					<img data-src='assets/img/smiling-man.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>
			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					<strong>Desde 2016, somos especialistas em consultorias Contábeis, Financeiras e Fiscais no Agro e nas importações de fertilizantes e exportações de grãos</strong>, dedicados a oferecer soluções personalizadas e eficientes para impulsionar o crescimento e o sucesso de nossos clientes. Com profundo conhecimento e experiência de preciosos insumos, dentre eles a uréia, compreendemos os desafios e as oportunidades únicas que o mercado apresenta.<br /><br />

					Nossa equipe é formada por especialistas apaixonados pelo setor, com <strong>mais de 20 anos de experiência</strong>, que acompanham de perto as tendências, inovações tecnológicas e tendência do mercado, para oferecer as melhores práticas e estratégias. Estamos sempre atualizados com as últimas informações, possuindo vasta experiência nacional e internacional como Estados Unidos, Itália, França, Suíça, Ásia e nos Emirados Árabes onde também possuímos grandes parceiros comerciais, clientes,fornecedores e investidores.
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
					Nossa Abordagem
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p>
					Nossa abordagem personalizada e orientada para resultados visa <b>maximizar a eficiência operacional</b>, reduzir os riscos e aumentar a rentabilidade de seu negócio.
				</p>

			</div>

		</div>
	</div>
</section>

<section id='parallax'>
	<img data-src='assets/img/grains-harvest.jpg' alt='Grãos' class='lazy cover parallax-img' />
</section>

<section class='title-desc bg-blue has-texture'>
	<div class='container'>
        <div class='row'>

			<div class='col-lg-5 left'>

				<h2 class='text-bigger white reveal-text'>
					O Grupo
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<div class='floating-icon' data-speed='1.025'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('assets/svg/floating-icon-text.svg'); ?>
					</div>

					<?php echo file_get_contents('assets/svg/icon.svg'); ?>

				</div>

				<p class='white'>
					<strong>O Grupo ESSENCE BUSINESS</strong> está preparado para enfrentar os desafios específicos de sua operação. Valorizamos a parceria com nossos clientes, trabalhando lado a lado para identificar oportunidades de crescimento, superar obstáculos e alcançar resultados duradouros.<br /><br />

					<strong>Conte conosco para fornecer soluções especializadas</strong>, conhecimento de ponta e um compromisso inabalável. Estamos prontos para fazer parte de sua jornada e ajudá-lo a alcançar todo o potencial de seu empreendimento no setor do agronegócio.
				</p>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>