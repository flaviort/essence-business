<?php
	$currentPage = 'home';
	include('components/modules/head.php');
?>

<section id='temp' class='once-in'>
	<div class='container'>
		<div class='row'>
			<div class='col-12'>

				<div class='logo'>
					<?php echo file_get_contents('assets/svg/logo.svg'); ?>
				</div>

				<p class='new'>
					Novo site
				</p>

				<h2 class='title'>
					Em Breve
				</h2>

				<p class='desc'>
					Estamos trabalhando muito para oferecer a você a melhor experiência!
				</p>

				<p class='address'>
					<b>Endereço:</b> Av. Jaime Reis, 30 - Conj. 12 - São Francisco, Curitiba - PR, 80510-010
				</p>

			</div>
		</div>
	</div>
</section>

<?php include('components/modules/footer.php');?>