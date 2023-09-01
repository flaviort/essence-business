<?php
	$currentPage = 'team';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='assets/img/teamwork.jpg' alt='Especialistas' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<p class='text-medium'>
					Sobre Nós
				</p>

				<h1 class='text-bigger'>
					<span>
						Especialistas
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
						<?php echo file_get_contents('assets/svg/floating-icon-text.svg'); ?>
					</div>

					<?php echo file_get_contents('assets/svg/icon.svg'); ?>

				</div>

				<div class='image image-full'>
					<img data-src='assets/img/shaking-hands-02.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p class='featured'>
					<span>
						Nossa equipe é composta por um grupo de especialistas altamente capacitados e dedicados no campo do agronegócio.
					</span>
				</p>

				<p>
					<strong>Cada membro de nossa equipe traz consigo uma combinação única de conhecimento, experiência e paixão pelo setor.</strong><br /><br />

					Nossos especialistas têm formação acadêmica sólida e estão constantemente atualizados com as últimas tendências, pesquisas e avanços tecnológicos no agronegócio. Eles possuem expertise em diversas áreas, incluindo Comércio Internacional, Execução Internacional, Financeira, Contábil, Fiscal e muito mais.
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
					Diferencial
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p>
					Acreditamos que a combinação de <strong>conhecimento especializado, experiência prática e paixão pelo agronegócio</strong> é o que nos diferencia. Estão comprometidos em ajudar nossos clientes a alcançarem seus objetivos, maximizarem sua produtividade e rentabilidade, ao mesmo tempo em que promovem a sustentabilidade e o desenvolvimento responsável.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='team-slider'>

	<div class='photos'>

		<div class='photo'>
			<img data-src='assets/img/team-marcelo.jpg' alt='Marcelo Vieira' class='lazy cover'>
		</div>

		<div class='photo'>
			<img data-src='assets/img/team-pedro.jpg' alt='Pedro Diehl' class='lazy cover'>
		</div>

		<div class='photo'>
			<img data-src='assets/img/team-elielson.jpg' alt='Elielson Vulczak' class='lazy cover'>
		</div>

	</div>

	<div class='container'>
        <div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 infos'>

				<h2 class='text-bigger white big-title'>
					<b>
						Conheça nosso time
					</b>
				</h2>

				<div class='photo'>
					<img data-src='assets/img/team-marcelo.jpg' alt='Marcelo Vieira' class='lazy cover'>
				</div>

				<div class='block pin-01'>

					<h3 class='text-big name'>
						<b>
							Marcelo Vieira
						</b>
					</h3>

					<p class='position'>
						<b>
							+ 20 anos de experiência no Agro
						</b>
					</p>

					<p class='desc'>
						Graduado em Ciências Contábeis com MBA em Gestão Empresarial e Certificado de Gestão de Pessoas. Vivência em multinacionais nos Estados Unidos, França, Suíça e Itália. Gerente de Controladoria com vasta experiência em implantação de sistemas e acompanhamento de resultados. Habilidade na elaboração de relatórios internacionais, Budgets, Forecast entre outros. Experiência em empresas como LANSING, AMAGGI, Limagrain, Fugro e outras.
					</p>

				</div>

				<div class='photo'>
					<img data-src='assets/img/team-pedro.jpg' alt='Pedro Diehl' class='lazy cover'>
				</div>

				<div class='block pin-02'>

					<h3 class='text-big name'>
						<b>
							Pedro Diehl
						</b>
					</h3>

					<p class='position'>
						<b>
							+ 35 anos de experiência no Agro
						</b>
					</p>

					<p class='desc'>
						Graduado em Administração de Empresas pela PUC/RS. Vasta experiência como broker no mercado de grãos e fertilizantes. Atuante como consultor de mercado dando entrevistas quinzenalmente para canais de agronegócio e atuando diretamente como broker junto a grandes clientes e produtores.
					</p>

				</div>

				<div class='photo'>
					<img data-src='assets/img/team-elielson.jpg' alt='Elielson Vulczak' class='lazy cover'>
				</div>

				<div class='block pin-03'>

					<h3 class='text-big name'>
						<b>
							Elielson Vulczak
						</b>
					</h3>

					<p class='position'>
						<b>
							+ 15 anos de experiência em processos administrativos
						</b>
					</p>

					<p class='desc'>
						Graduando em Ciências Contábeis. Vasta experiência em implantação de sistemas operacionais como TOTVS, por exemplo. Consultor de processos administrativos e operacionais visualizando demonstração de resultados por atividade, produto, linha de negócio. Experiência em grandes empresas como Fugro Geotecnia, Agrinvest Commodities, Lansing Brasil entre outras.
					</p>

				</div>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>