<?php
	$currentPage = 'work';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/shaking-hands.jpg' alt='Work with Us' class='lazy cover top-full'>
	</div>

	<div class='container container-big once-in'>
		<div class='row'>
			<div class='col-12'>

				<p class='text-medium'>
					Contact
				</p>

				<h1 class='text-bigger'>
					<span>
						Work with Us
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
					<b>Come and be part of our team!</b><br /><br />

					At <b>ESSENCE BUSINESS GROUP</b>, we believe that success is directly linked to the talent, dedication and passion of our employees. We are constantly looking for qualified and motivated professionals who want to contribute to the growth and development of our company.
				</p>

			</div>

			<div class='col-md-6 right'>

				<div class='bg'></div>

				<form method='post' id='work-form' class='form-validate' enctype='multipart/form-data'>

					<div class='form-line'>
						<div class='line-wrapper'>
							
							<select id='area' name='Area' class='input select' required>
								<option value='' selected disabled>Occupation area</option>
								<option value='Administrativo'>Administrative</option>
								<option value='Comercial'>Commercial</option>
								<option value='Operacional'>Operational</option>
								<option value='Logística'>Logistics</option>
								<option value='Faturamento'>Invoicing</option>
								<option value='Representantes'>Representatives</option>
								<option value='Jurídico'>Legal</option>
								<option value='Institucional'>Institutional</option>
								<option value='Outros'>Others</option>
							</select>

							<?php echo file_get_contents('../assets/svg/ux/angle-down.svg'); ?>

						</div>
					</div>

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

							<input type='file' id='file' name='file' class='input' placeholder='Curriculum' accept='.doc, .docx, .pdf'>
							
							<p class='text-small max-size'>
								Only PDF/doc with a maximum of 5mb allowed
							</p>

						</div>
					</div>

					<div class='form-line last'>

						<input type='submit' id='work-send' name='send-work'>

						<label for='work-send' class='hollow-white-button magnet'>
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

<section class='full-section'>

	<div class='big-image'>
		<img data-src='../assets/img/hifive.jpg' alt='Essence Business' class='lazy cover parallax-img'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<p>
					<b>If you are an engaged, proactive person who is passionate about what you do, we have exciting opportunities waiting for you.</b> We offer a collaborative and dynamic work environment in which you can expand your skills, face stimulating challenges and grow professionally.<br /><br />

					As part of our team, you will have the chance to work on <b>innovative projects</b>, interact with experienced professionals and gain valuable knowledge in a constantly evolving sector. Additionally, we offer <b>professional development opportunities and training programs to help you reach your full potential.</b><br /><br />

					If you are looking for a new opportunity and want to be part of a team committed to excellence and growth, we invite you to apply for one of our job positions.<br /><br />

					<b>We look forward to meeting you and discovering how your skills and talents can contribute to the success of our company.</b>
				</p>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>