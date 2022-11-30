<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container">
    <h2 class="subtitulo"><?php the_title(); ?></h2>
    <div class="grid-16">
        <?php the_content(); ?>
    </div>
</section>
<?php endwhile; else: ?>
    
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>