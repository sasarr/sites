<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!--Googlefont-->
		<link href="https://fonts.googleapis.com/css?family=Candal|Open+Sans" rel="stylesheet">

		<!--Fontawesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header role="banner">
				<div class="container">
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php //html5blank_nav(); ?>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
						<a href="<?php echo home_url(); ?>/serveur-mutualise">
							<i class="fa fa-users" aria-hidden="true"></i>
							Serveur Mutualisé
						</a>
						<a href="<?php echo home_url(); ?>/serveur-dedie">
							<i class="fa fa-user" aria-hidden="true"></i>
							Serveur Dédié
						</a>
						<a href="<?php echo home_url(); ?>/solution-cloud">
							<i class="fa fa-cloud" aria-hidden="true"></i>
							Solution "Cloud"
						</a>
						<a href="<?php echo home_url(); ?>/contact">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							Contact
						</a>

						<a href="<?php echo home_url(); ?>/blog">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							Blog
						</a>
					</nav>
					<!-- /nav -->
				</div>

					<!-- logo -->
					<!--div class="logo">
						<a href="<?php //echo home_url(); ?>">
							<svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!--img src="<?php //echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a-->
					<!--/div-->
					<!-- /logo -->

					<!-- nav -->
					<!--nav class="nav" role="navigation">
						<?php //html5blank_nav(); ?>
					</nav-->
					<!-- /nav -->

			</header>
			<!-- /header -->
