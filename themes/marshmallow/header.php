<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Required meta tags --> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Marshmallow Bootstrap Admin Dashboard Template</title>
	<link rel="shortcut icon" href="images/favicon.png" />
	<?php wp_head(); ?>
	</head>

	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="Marshmallow"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
						<img src="<?= get_template_directory_uri() . '/assets/images/logo-dark.svg' ?>" class="logo-mobile-menu" alt="logo">
						<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
					</div>
					<!-- <ul class="navbar-nav ml-auto align-items-center">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#projects">Projects</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#testimonial">Testimonial</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#plans">Plans</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-success" href="#contact">174-394-9560</a>
						</li>
					</ul> -->

          <?php 
            wp_nav_menu( array(
              'theme_location'  => 'bootstrap',
              'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'navbar-nav ml-auto align-items-center',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ) );

          ?>
				</div>
			</div>
		</nav>