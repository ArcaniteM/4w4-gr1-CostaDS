<?php /** category par defaut du theme */ ?>
<?php get_header(); ?>

<main class="site__main">
   <section class="blocflex">
      <?php
         $category = get_queried_object();
         // permet d utiliser la nouevlle requette
         $args = array(
            'category_name' => $category->slug,
            'orderby' => 'title',
            'order' => 'ASC'
         );
         //creation d une nouvelle requette
         $query = new WP_Query( $args );
         // tout le reste de l extraction est base sur wp_query 
         if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
            get_template_part("template-parts/categorie", $category->slug);

         ?>
            
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>           
    <?php get_footer(); ?>
	
</body>
</html>