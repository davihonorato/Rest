<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container contato">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-16">
		<a href="<?php the_field('link_do_mapa'); ?>" target="_blank"><img src="<?php the_field('imagem_do_mapa'); ?>" alt="Fachada do Rest"></a>
	</div>

	<?php if(have_rows('conteudo_fale_conosco')): while(have_rows('conteudo_fale_conosco')) : the_row(); ?>
	<div class="grid-1-3 contato-item">
		<h2><?php the_sub_field('titulo_contato'); ?></h2>
		<?php the_sub_field('informacoes_de_contato'); ?>
	</div>
	<?php endwhile; endif; ?>

</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>