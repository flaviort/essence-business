<?php
	$currentPage = 'contact';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/smiling-woman-sac.jpg' alt='Contact Us' class='lazy cover top'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>

				<p class='text-medium'>
					Contact
				</p>

				<h1 class='text-bigger'>
					<span>
						Contact Us
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
					We appreciate your interest in our company and look forward to the opportunity to serve you. Your satisfaction is our priority, and we will do our best to ensure a quick and efficient answer for you.<br /><br />

					<b>Contact us today and find out how we can meet your needs.</b>
				</p>

			</div>

			<div class='col-md-6 right'>

				<div class='bg'></div>

				<form method='post' id='contact-form' class='form-validate'>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='text' id='name' name='Nome' class='input' placeholder='Name' required>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='email' id='email' name='Email' class='input' placeholder='Email' required>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='text' id='phone' name='Telefone' class='input' placeholder='Phone'>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<textarea id='message' name='Mensagem' class='input textarea' placeholder='How can we help you?' required></textarea>
						</div>
					</div>

					<div class='form-line last'>

						<input type='submit' id='contact-send' name='send-contact'>

						<label for='contact-send' class='hollow-white-button magnet'>
							<span>
								Submit
								<div class='loading'>
									<?php echo file_get_contents('../assets/svg/ux/loading.svg'); ?>
								</div>
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
					Where <br />
					We Are
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<p>
					<b>ESSENCE BUSINESS HEADQUARTER</b><br/ >
					Av. Anita Garibaldi, 850, Cabral, Curitiba / PR
				</p>

			</div>

		</div>
	</div>
</section>

<section id='map'>
	<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.0203985324397!2d-49.25994682390571!3d-25.404127777578342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce69d0eb63c69%3A0x25206c4080e80aad!2sAv.%20Anita%20Garibaldi%2C%20850%20-%20Cabral%2C%20Curitiba%20-%20PR%2C%2080540-400!5e0!3m2!1sen-US!2sbr!4v1693329248874!5m2!1sen-US!2sbr' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
</section>

<section id='map-section'>
	<div class='container'>
		<div class='row'>

			<div class='col-lg-5 left'>

				<div class='floating-icon'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('../assets/svg/floating-icon-text-en.svg'); ?>
					</div>

					<?php echo file_get_contents('../assets/svg/icon.svg'); ?>

				</div>

				<h2 class='text-bigger reveal-text white'>
					Discover our operation
				</h2>

			</div>

			<div class='col-lg-7 right'>

				<img data-src='../assets/img/map-en.png' alt='Discover our operation' class='lazy'>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>