<?php
	$currentPage = 'social';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='assets/img/hands-holding-leaves.jpg' alt='Projetos Sociais' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>

				<p class='text-medium'>
					Projetos Sociais
				</p>

				<h1 class='text-bigger'>
					<span>
						EAS - Essence Atuante e Solidária
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
					<img data-src='assets/img/child-smiling.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					<b>Nós acreditamos firmemente na importância de fazer a diferença em nossa comunidade e contribuir para um mundo melhor.</b><br /><br />

					Por isso, temos o orgulho de apoiar e colaborar com organizações não governamentais (ONGs) que estão trabalhando arduamente para promover causas nobres. Acreditamos que as ONGs desempenham um papel crucial em diversos setores, seja na proteção do meio ambiente, no apoio a comunidades carentes, na educação, na saúde ou em outras áreas igualmente relevantes.<br /><br />

					<b>Reconhecemos a dedicação e o impacto positivo que essas organizações têm em nossa sociedade, e por isso buscamos estabelecer parcerias duradouras com elas.</b>
				</p>

			</div>

		</div>
	</div>
</section>

<section class='full-section'>

	<div class='big-image'>
		<img data-src='assets/img/social.jpg' alt='Compromisso Social' class='lazy cover parallax-img'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<div class='floating-icon' data-speed='1.025'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('assets/svg/floating-icon-text.svg'); ?>
					</div>

					<?php echo file_get_contents('assets/svg/icon.svg'); ?>

				</div>

				<h2 class='text-bigger reveal-text white'>
					Compromisso Social
				</h2>

				<p>
					Colaboramos com ONGs por meio de doações financeiras, programas de voluntariado e outras formas de apoio, dependendo das necessidades específicas de cada organização.<br /><br />

					Nosso objetivo é contribuir de forma significativa para as iniciativas e projetos que elas desenvolvem, ajudando a impulsionar sua missão e alcançar resultados positivos.<br /><br />

					Nosso compromisso social não se limita apenas às parcerias com ONGs. Também incentivamos nossos colaboradores a se envolverem em ações voluntárias e causas sociais que são significativas para eles.<br /><br />

					<b>Acreditamos no poder do engajamento individual e coletivo para criar mudanças positivas em nosso entorno.</b>
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
					Projetos que apoiamos
				</h2>

				<p>
					<b>Junte-se a nós nessa jornada de responsabilidade social e transformação positiva.</b><br /><br />
					
					Acreditamos que, juntos, podemos fazer a diferença e construir um futuro melhor para todos.
				</p>

			</div>

			<div class='col-md-6 right has-logos'>

				<a href='https://pequenoprincipe.org.br/' target='_blank' class='logo'>
					<img data-src='assets/img/pequeno-principe.png' alt='Hospital Pequeno Príncipe' class='lazy'>
				</a>

				<a href='https://www.funbeca.com.br/' target='_blank' class='logo'>
					<img data-src='assets/img/hnsa.png' alt='Hospital Nossa Senhora Aparecida' class='lazy'>
				</a>

				<a href='https://www.erastinho.com.br/' target='_blank' class='logo'>
					<img data-src='assets/img/erastinho.png' alt='Hospital Erastinho' class='lazy'>
				</a>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>