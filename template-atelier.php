<?php 
/**
 * template name: Atelier
 */
?>

<?php get_header(); 
get_template_part("template-parts/aside-atelier"); 
?>
<main class="site__main">
    
    <?php if ( have_posts() ) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
            <?php the_content();?>
        
    <?php endif;?>
    </main><!-- #main -->
    <?php get_footer(); ?>