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
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
               <h2><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h2>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>           
    <?php get_footer(); ?>
	
</body>
</html>