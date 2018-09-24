
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<!--Fontawesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

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
			<?php //html5blank_nav(); ?>
					
			<header>
				<nav>
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<a href="serveur-mutualise.html">
						<i class="fa fa-users" aria-hidden="true"></i>
						Serveur Mutualis\Uffffffff				</a>
					<a href="serveur-dedie.html">
						<i class="fa fa-user" aria-hidden="true"></i>
						Serveur D\Uffffffff\Uffffffff				</a>
					<a href="cloud.html">
						<i class="fa fa-cloud" aria-hidden="true"></i>
						Solution "Cloud"
					</a>
					<a href="contact.html">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						Contact
					</a>
				</nav>
				
				<section id="tagline">
					<h1>L'h\Uffffffffrgement \Uffffffffrix libre</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</section>
				<form>
					<input type="text" placeholder="Que recherchez-vous ?">
				</form>
			</header>
			<!-- /header -->
