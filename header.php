<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?> - <?php the_field('title_seo'); ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> | <?php the_field('description_seo') ?>">

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<!-- deader wordpress -->
        <?php wp_head(); ?>
		<!-- end header wordpress -->
	</head>

	<body>
		
		<header>
			<nav>
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
						);
					wp_nav_menu( $args );
				?>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

			<p><?php the_field('endereco_header', 11) ?></p>
			<p class="telefone"><?php the_field('contato_header', 11) ?></p>
		</header>