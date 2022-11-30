<?php
// Template Name: Home
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<?php if(have_rows('categoria')): while(have_rows('categoria')) : the_row(); ?>
	<div class="menu-prato grid-8">
		<h2><?php the_sub_field('nome_da_categoria'); ?></h2>
		<ul>

			<?php if(have_rows('pratos')): while(have_rows('pratos')) : the_row(); ?>
			<li>
				<span><sup>R$</sup><?php the_sub_field('preco_do_prato'); ?></span>
				<div>
					<h3><?php the_sub_field('nome_do_prato'); ?></h3>
					<?php the_sub_field('descricao_do_prato'); ?>
				</div>
			</li>
			<?php endwhile; endif; ?>

		</ul>
	</div>
	<?php endwhile; endif; ?>

</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>