<?php
	$currentPage = 'services';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='assets/img/services-04.jpg' alt='Cursos e Treinamentos' class='lazy cover top'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<p class='text-medium'>
					Serviços
				</p>

				<h1 class='text-bigger'>
					<span>
						Cursos e Treinamentos
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
					<img data-src='assets/img/lecture.jpg' alt='Essence Business' class='lazy cover parallax-img top'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p class='featured'>
					<span>
						Desenvolva suas habilidades e alcance seu potencial máximo com nossos cursos, treinamentos e coaching!
					</span>
				</p>

				<p>
					<strong>ESSENCE BUSINESS CURSOS E TREINAMENTOS LTDA</strong> é uma empresa do <strong>GRUPO ESSENCE BUSINESS</strong> que acredita que o aprendizado contínuo é essencial para o crescimento pessoal e profissional. Por isso, oferecemos uma ampla variedade de cursos, treinamentos e programas de coaching, projetados para ajudá-lo a adquirir novos conhecimentos, aprimorar suas habilidades e atingir seus objetivos.<br /><br />

					Nossos cursos abrangem uma ampla gama de áreas, com orientação personalizada para <b>profissionais da área administrativa, financeira, fiscal, contábil e entre outros.</b> Dispomos de know-how atual e dinâmico aliado a uma linha de raciocínio lógico e indicativo. Cada curso é cuidadosamente elaborado por especialistas em suas respectivas áreas, garantindo conteúdo relevante e de qualidade.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='full-section'>

	<div class='big-image'>
		<img data-src='assets/img/connectivity.jpg' alt='Parceiros' class='lazy cover parallax-img'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<p>
					<b>Nossos treinamentos são focados em fornecer habilidades práticas e aplicáveis para o seu ambiente de trabalho.</b> Eles podem ser conduzidos em formato presencial ou online, permitindo que você escolha a opção mais conveniente para sua agenda e preferências. Independentemente do formato, nossa equipe de instrutores experientes e qualificados está comprometida em fornecer uma experiência de aprendizado envolvente e enriquecedora.<br /><br />

					Além disso, <b>POSSUÍMOS PARCEIROS</b> credenciados ao <b><a href='https://www.ibccoaching.com.br/' class='hover-underline-white' target='_blank'>IBC Coaching</a></b>. Oferecemos programas de coaching individual e em grupo, nos quais você receberá orientação para identificar e superar desafios específicos, definir metas claras e traçar um plano de ação eficaz. <b>Nossos coaches PARCEIROS são profissionais experientes e certificados</b>, prontos para fornecer suporte e orientação durante todo o processo de desenvolvimento pessoal e profissional.<br /><br />

					Valorizamos a interação e o envolvimento dos participantes em nossos cursos, treinamentos e coaching. <b>Acreditamos que o aprendizado é mais eficaz quando é dinâmico, participativo e baseado em situações reais.</b> Por isso, oferecemos atividades práticas, estudos de caso, exercícios de simulação e outras abordagens interativas, permitindo que você aplique imediatamente o que aprendeu.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='has-blue-box'>
	<div class='container'>
		<div class='row'>

			<div class='col-md-6 col-md-push-6 right'>

				<div class='floating-icon' data-speed='1.1'>
					
					<div class='rotating-bg'>
						<?php echo file_get_contents('assets/svg/floating-icon-text.svg'); ?>
					</div>

					<?php echo file_get_contents('assets/svg/icon.svg'); ?>

				</div>

				<div class='image'>
					<img data-src='assets/img/man-smiling-computer.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					Independentemente de sua função, nível de experiência ou setor de atuação, temos um programa de desenvolvimento que pode ajudá-lo a alcançar seus objetivos e impulsionar sua carreira.<br /><br />
					
					<b>Estamos comprometidos em fornecer um ambiente de aprendizado inspirador</b>, no qual você possa se sentir motivado e capacitado para alcançar todo o seu potencial.
				</p>

			</div>

			<div class='col-12 bottom'>
				<div class='box'>

					<p>
						Entre em contato conosco para obter mais informações, solicitar uma consulta ou se inscrever em um de nossos programas. Estamos ansiosos para apoiar você em sua jornada de crescimento e sucesso.<br /><br />

						Invista em seu desenvolvimento pessoal e profissional conosco. Aproveite nossos cursos, treinamentos e coaching para alcançar resultados extraordinários!
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