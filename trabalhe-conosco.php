<?php
	$currentPage = 'work';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='assets/img/shaking-hands.jpg' alt='Trabalhe Conosco' class='lazy cover top-full'>
	</div>

	<div class='container container-big once-in'>
		<div class='row'>
			<div class='col-12'>

				<p class='text-medium'>
					Contato
				</p>

				<h1 class='text-bigger'>
					<span>
						Trabalhe Conosco
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
					<b>Venha fazer parte da nossa equipe!</b><br /><br />

					No <b>GRUPO ESSENCE BUSINESS</b>, acreditamos que o sucesso está diretamente ligado ao talento, à dedicação e à paixão de nossos colaboradores. Estamos constantemente em busca de profissionais qualificados e motivados que desejam contribuir para o crescimento e o desenvolvimento de nossa empresa.
				</p>

			</div>

			<div class='col-md-6 right'>

				<div class='bg'></div>

				<form method='post' id='work-form' class='form-validate' enctype='multipart/form-data'>

					<div class='form-line'>
						<div class='line-wrapper'>
							
							<select id='area' name='Area' class='input select' required>
								<option value='' selected disabled>Área de Atuação</option>
								<option value='Administrativo'>Administrativo</option>
								<option value='Comercial'>Comercial</option>
								<option value='Operacional'>Operacional</option>
								<option value='Logística'>Logística</option>
								<option value='Faturamento'>Faturamento</option>
								<option value='Representantes'>Representantes</option>
								<option value='Jurídico'>Jurídico</option>
								<option value='Institucional'>Institucional</option>
								<option value='Outros'>Outros</option>
							</select>

							<?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

						</div>
					</div>

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

							<input type='file' id='file' name='file' class='input' placeholder='Currículo' accept='.doc, .docx, .pdf'>
							
							<p class='text-small max-size'>
								Permitido pdf/doc com no máximo 5mb
							</p>

						</div>
					</div>

					<div class='form-line last'>

						<input type='submit' id='work-send' name='send-work'>

						<label for='work-send' class='hollow-white-button magnet'>
							<span>
								Enviar
								<div class='loading'>
									<?php echo file_get_contents('assets/svg/ux/loading.svg'); ?>
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
		<img data-src='assets/img/hifive.jpg' alt='Essence Business' class='lazy cover parallax-img'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<p>
					<b>Se você é uma pessoa engajada, proativa e apaixonada pelo que faz, temos oportunidades empolgantes esperando por você.</b> Oferecemos um ambiente de trabalho colaborativo e dinâmico, no qual você poderá expandir suas habilidades, enfrentar desafios estimulantes e crescer profissionalmente.<br /><br />

					Como parte de nossa equipe, você terá a chance de trabalhar em <b>projetos inovadores</b>, interagir com profissionais experientes e adquirir conhecimentos valiosos em um setor em constante evolução. Além disso, oferecemos oportunidades de <b>desenvolvimento profissional e programas de capacitação para ajudá-lo a alcançar todo o seu potencial.</b><br /><br />

					Se você está em busca de uma nova oportunidade e deseja fazer parte de uma equipe comprometida com a excelência e o crescimento, convidamos você a se candidatar a uma de nossas vagas.<br /><br />

					<b>Estamos ansiosos para conhecer você e descobrir como suas habilidades e talentos podem contribuir para o sucesso de nossa empresa.</b>
				</p>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>