<?php include('components/globals.php') ?>

<!DOCTYPE html>
	<html lang='pt-BR'>

		<head>

			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
			<meta name='format-detection' content='telephone=no'>
			<link rel='shortcut icon' href='favicon.png'>

			<meta name='author' content='Essence Business - Importação e Exportação'>

			<title>Essence Business - Importação e Exportação <?php echo htmlspecialchars($page);?></title>

			<!-- google -->
			<meta name='description' content='Essence Business - Importação e Exportação - Soluções Eficientes para impulsionar o crescimento do agronegócio.'/>
			<link rel='canonical' href='<?php echo($siteUrl); ?>' />
				
			<!-- facebook -->
			<meta property='og:locale' content='en_US' />
			<meta property='og:type' content='website' />
			<meta property='og:title' content='Essence Business - Importação e Exportação' />
			<meta property='og:description' content='Essence Business - Importação e Exportação - Soluções Eficientes para impulsionar o crescimento do agronegócio.' />
			<meta property='og:url' content='<?php echo($siteUrl); ?>/' />
			<meta property='og:site_name' content='Essence Business - Importação e Exportação' />
			<meta property='og:image' content='<?php echo($siteUrl); ?>/assets/img/og-image.jpg' />
			<meta property='og:image:secure_url' content='<?php echo($siteUrl); ?>/assets/img/og-image.jpg' />
			<meta property='og:image:width' content='1200' />
			<meta property='og:image:height' content='630' />

			<!-- css -->
			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' />
			<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' />
			<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css' />
			<link rel='preconnect' href='https://fonts.googleapis.com'>
			<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
			<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap'>
			<link rel='stylesheet' href='assets/css/framework.min.css' type='text/css'>
			<link rel='stylesheet' href='assets/css/main.css' type='text/css'>
			
		</head>

		<body data-barba='wrapper'>

			<header>
				<?php include('components/top-menu.php');?>
				<?php include('components/fs-menu.php');?>
				<?php include('components/page-transition.php');?>
				<div id='mouse'></div>
			</header>

			<main id='main-content' data-barba='container' data-barba-namespace='<?php echo($currentPage); ?>' class='<?php echo($currentPage); ?>'>
				<div id='smooth-content'>
					<div class='main-wrap'>