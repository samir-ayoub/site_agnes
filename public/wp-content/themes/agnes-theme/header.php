<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset=”uft-8” />
	<title><?php echo get_bloginfo('name'); ?></title>
	<meta name="description" content="Venha aprender Frances online com Le Cours de Français. Aulas Particular, em grupo ou por skype. Entre em contato ja com a sua nova professora!">

	<meta name="keywords" content="online, e learning, Paulista, Pinheiros, Clinicas, français des affaires, Business, particular, basico, audio, avançado, a distancia, conversação, aula de frances em sp, São Paulo, para iniciantes, pela internet, pelo skype, skype, nivel 1, Litteratura,  en ligne,  francais et civilisation , cours de français à distance
débutant, d'orthographe, en ligne, en video, translation, jardins, voyage,formation, curso online, idioma, curso, aulas particulares">

	<meta name="googlebot" content="index, follow, noarquive">
	<meta name="author" content="Samir Ayoub">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/images/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,500,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/owl.carousel.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:100,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">

	<?php wp_head(); ?>
	
</head>
<body>
	<header class="header-front-page">
		<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="nav-logo" href="#" title="Le Cours de Français">
						<img src="<?php bloginfo('template_url') ;?>/images/logonew.png" alt="logotipo" title="Le Cours de Français">
					</a>
				</div>


				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right main-menu">
						<?php if( is_page() && !is_page("blog") ){ ?>
							<?php if(is_page("en")):?>
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#about-me">Resume</a></li>
								<li><a href="#options">Options</a></li>
								<li><a href="#contact">Contact</a></li>
							<?php elseif(is_page("fr")):?>
								<li class="active"><a href="#">Accueil</a></li>
								<li><a href="#about-me">Presentation</a></li>
								<li><a href="#options">Options</a></li>
								<li><a href="#contact">Contact</a></li>
							<?php else: ?>
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#about-me">Sobre</a></li>
								<li><a href="#options">Opções</a></li>
								<li><a href="#formulario">Avaliação</a></li>
								<li><a href="#contact">Contato</a></li>
								<li><a href="#blog">Blog</a></li>
							<?php endif; ?>
						<?php }else{ ?>
							<li class="active"><a href="<?php echo bloginfo('url'); ?>">Home</a></li>
						<?php } ?>
					</ul>
					<ul class="nav navbar-nav navbar-right language-select <?= $wp_query->queried_object->post_name; ?>">
						<li><a href="<?php echo bloginfo('url'); ?>">PT</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/fr">FR</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/en">EN</a></li>
					</ul>
				</div><!--/.nav-collapse -->
				<div id="navbar" class="navbar-collapse collapse">

				</div><!--/.nav-collapse -->
			</div>
		</nav>
	</header>




