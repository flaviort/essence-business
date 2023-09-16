<?php
	$currentPage = 'services';
	include('components/head.php');
?>

<section id='internal-banner' class='top-banner'>

	<div class='bg'>
		<img data-src='../assets/img/services-04.jpg' alt='Courses and Training' class='lazy cover top'>
	</div>

	<div class='container container-big once-in'>
        <div class='row'>
			<div class='col-12'>
				
				<p class='text-medium'>
					Services
				</p>

				<h1 class='text-bigger'>
					<span>
						Courses and Training
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
					<img data-src='../assets/img/lecture.jpg' alt='Essence Business' class='lazy cover parallax-img top'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p class='featured'>
					<span>
						Develop your skills and reach your maximum potential with our courses, training and coaching!
					</span>
				</p>

				<p>
					<strong>ESSENCE BUSINESS COURSES AND TRAINING LTDA</strong> is a company of the <strong>ESSENCE BUSINESS GROUP</strong> that believes that continuous learning is essential for personal and professional growth. That's why we offer a wide range of courses, training and coaching programs designed to help you acquire new knowledge, improve your skills and achieve your goals.<br /><br />

					Our courses cover a wide range of areas, with personalized guidance for <b>professionals in the administrative, financial, tax, accounting and other areas.</b> We have current and dynamic know-how combined with a line of logical and indicative. Each course is carefully designed by experts in their respective fields, ensuring relevant and quality content.
				</p>

			</div>

		</div>
	</div>
</section>

<section class='full-section'>

	<div class='big-image'>
		<img data-src='../assets/img/connectivity.jpg' alt='Partners' class='lazy cover parallax-img'>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-lg-6'></div>

			<div class='col-lg-6 right'>

				<p>
					<b>Our trainings are focused on providing practical and applicable skills for your work environment.</b> They can be conducted in-person or online, allowing you to choose the option that is most convenient for your schedule and preferences. Regardless of the format, our team of experienced and qualified instructors is committed to providing an engaging and enriching learning experience.<br /><br />

					Furthermore, <b>WE HAVE PARTNERS</b> accredited to <b><a href='https://www.ibccoaching.com.br/' class='hover-underline-white' target='_blank'> IBC Coaching</a></b>. We offer individual and group coaching programs, where you will receive guidance to identify and overcome specific challenges, set clear goals and create an effective action plan. <b>Our PARTNER coaches are experienced and certified professionals</b>, ready to provide support and guidance throughout the personal and professional development process.<br /><br />

					We value participant interaction and involvement in our courses, training and coaching. <b>We believe that learning is most effective when it is dynamic, participatory and based on real situations.</b> Therefore, we offer practical activities, case studies, simulation exercises and other interactive approaches, allowing you to immediately apply the that you learned.
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
						<?php echo file_get_contents('../assets/svg/floating-icon-text-en.svg'); ?>
					</div>

					<?php echo file_get_contents('../assets/svg/icon.svg'); ?>

				</div>

				<div class='image'>
					<img data-src='../assets/img/man-smiling-computer.jpg' alt='Essence Business' class='lazy cover parallax-img'>
				</div>

			</div>

			<div class='col-md-6 col-md-pull-6 left'>

				<p>
					Regardless of your role, experience level or industry, we have a development program that can help you achieve your goals and boost your career.<br /><br />

					<b>We are committed to providing an inspiring learning environment</b> where you can feel motivated and empowered to reach your full potential.
				</p>

			</div>

			<div class='col-12 bottom'>
				<div class='box'>

					<p>
						Contact us for more information, request a consultation or enroll in one of our programs. We look forward to supporting you on your journey of growth and success.<br /><br />

						Invest in your personal and professional development with us. Take advantage of our courses, training and coaching to achieve extraordinary results!
					</p>

					<a href='<?php echo($contact); ?>' class='hollow-white-button magnet'>
						<span>
							Click here
						</span>
					</a>
					
				</div>
			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php');?>