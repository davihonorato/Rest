<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container sobre">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-8">
		<img src="<?php the_field('fachada_do_restaurante_rest'); ?>" alt="<?php the_field('texto_alternativo_para_a_fachada'); ?>">
	</div>

	<div class="grid-8">

		<?php if(have_rows('conteudo_da_pagina')): while(have_rows('conteudo_da_pagina')) : the_row(); ?>
		<h2><?php the_sub_field('titulo'); ?></h2>
		<?php the_sub_field('texto'); ?>
		<?php endwhile; else : endif; ?>
		
	</div>
</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>