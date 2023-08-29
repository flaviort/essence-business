<?php
	$currentPage = 'contact';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='assets/img/smiling-woman-sac.jpg' alt='Fale Conosco' class='lazy cover'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>

				<p class='text-medium'>
					Contato
				</p>

				<h1 class='text-bigger'>
					<span>
						Fale Conosco
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

<section id='top-box' class='light has-form'>
	<div class='container'>
        <div class='row'>

			<div class='col-md-6 left'>

				<p>
					Agradecemos seu interesse em nossa empresa e aguardamos com expectativa a oportunidade de atendê-lo. Sua satisfação é nossa prioridade, e faremos o possível para garantir uma resposta rápida e eficiente.<br /><br />

					<b>Entre em contato conosco hoje mesmo e descubra como podemos atender às suas necessidades.</b>
				</p>

			</div>

			<div class='col-md-6 right'>

				<div class='bg'></div>

				<form method='post' id='contact-form' class='form-validate'>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='text' id='name' name='Nome' class='input' placeholder='Nome' required>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='email' id='email' name='Email' class='input' placeholder='Email' required>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='text' id='phone' name='Telefone' class='input' placeholder='Telefone'>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<textarea id='message' name='Mensagem' class='input textarea' placeholder='Como podemos ajudar?' required></textarea>
						</div>
					</div>

					<div class='form-line last'>

						<div class='h-captcha' data-sitekey='32e67768-4d3f-419f-9396-45aef0380381'></div>

						<input type='submit' id='contact-send'>

						<label for='contact-send' class='hollow-white-button magnet'>
							<span>
								Enviar
							</span>
						</label>

					</div>

					<a href='#contact-success' data-fancybox class='contact-success'></a>
					<a href='#contact-error' data-fancybox class='contact-error'></a>
					<?php include('components/popups/contact.php'); ?>

				</form>

			</div>

		</div>
	</div>
</section>

<section class='title-desc bg-green'>
	<div class='container'>
        <div class='row'>

			<div class='col-lg-5 left'>

				<h2 class='text-bigger white reveal-text'>
					Onde <br />
					Estamos
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p>
					<b>SEDE ESSENCE BUSINESS</b><br/ >
					Av. Anita Garibaldi, 850, Cabral, Curitiba / PR
				</p>

			</div>

		</div>
	</div>
</section>

<section id='map'>
	<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.0203985324397!2d-49.25994682390571!3d-25.404127777578342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce69d0eb63c69%3A0x25206c4080e80aad!2sAv.%20Anita%20Garibaldi%2C%20850%20-%20Cabral%2C%20Curitiba%20-%20PR%2C%2080540-400!5e0!3m2!1spt-BR!2sbr!4v1693329248874!5m2!1spt-BR!2sbr' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
</section>

<section id='map-section'>
	<div class='container'>
		<div class='row'>

			<div class='col-lg-5 left'>

				<div class='floating-icon'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('assets/svg/floating-icon-text.svg'); ?>
					</div>

					<?php echo file_get_contents('assets/svg/icon.svg'); ?>

				</div>

				<h2 class='text-bigger reveal-text white'>
					Conheça nossa operação
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<img data-src='assets/img/map.png' alt='Conheça nossa operação' class='lazy'>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>