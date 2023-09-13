<?php
	$currentPage = 'logistics';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='assets/img/silos-sunset.jpg' alt='Comercialização e Logística' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>

				<h1 class='text-bigger small'>
					<span>
						Comercialização e Logística
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
					<img data-src='assets/img/train-grains.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					Nossa expertise na comercialização de grãos para o mercado de exportação nos habilita também a realizar comercializações seguras para nossos clientes no mercado interno.<br /><br />

					Temos participado de negociações com volume físico ou com indicações de negócios, além comparativos e análises na paridade esmagamento/exportação ou na comercialização dos produtos tributados.<br /><br />

					Nosso elevado índice de relacionamento com produtores e comercializadores/esmagadores tem proporcionado excelentes negociações para ambos os participantes do negócio.<br /><br />

					<b>O esmagamento da soja e o resultado da extração de seus produtos derivados como o farelo de alta proteína (HIPRO) ou baixa proteína (LOWPRO), o óleo de soja, lecitina exigem uma atenção especial para sua comercialização, pois, todos os produtos têm seus valores agregados e possuem alta demanda no mercado interno.</b>
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
					Milho
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p class='white'>
					O milho commodities de maior produção no Brasil, com preço equivalente a aproximadamente 40% do valor por tonelada da soja, é uma commodity tanto utilizada na preparação de ração animal, na extração de álcool como na preparação de suplemento de ração (DDGS - grão seco destilado e solúvel) com alto teor de proteína.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='full-section'>

	<div class='big-image'>
		<img data-src='assets/img/harvest.jpg' alt='Comercialização' class='lazy cover parallax-img position-right'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<h2 class='text-bigger reveal-text white'>
					Comercialização
				</h2>

				<p>
					<b>Atuamos fortemente na comercialização de fertilizantes nacionais e importados</b>, tais como Uréia, Cloreto de Potássio (KCL), MAP e DAP e outros, tanto para volumes pequenos (acima de 32 toneladas) como para volumes de maior monta - acima de 15.000 toneladas.<br /><br />

					<b>Possuímos fortes parceiros para comercialização</b> de formulados, calcários, gesso granulado e outros.<br /><br />

					<b>Os profissionais da Essence Business</b> independente de grãos comercializados (soja, milho, trigo, algodão, sorgo, girassol e outros) ou fertilizantes (ureia, cloreto de potássio e outros) <b>estão inteiramente atentos ao mercado e suas demandas de comercialização.</b><br /><br />

					<b>Buscamos sempre o melhor resultado para o produtor e para o cliente final</b>, analisando o custo por tonelada na origem, produto nacionalizado ou na saca do grão, spread incluso, custo logístico, portuário etc.
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
						<?php echo file_get_contents('assets/svg/floating-icon-text.svg'); ?>
					</div>

					<?php echo file_get_contents('assets/svg/icon.svg'); ?>

				</div>

				<div class='box'>

					<p>
						Entre em contato conosco para solicitar cotações, obter informações adicionais ou esclarecer quaisquer dúvidas. Estamos ansiosos para ser seu parceiro confiável na exportação de grãos de alta qualidade.
					</p>

					<a href='<?php echo($contact); ?>' class='hollow-white-button magnet'>
						<span>
							Clique aqui
						</span>
					</a>
					
				</div>
			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>