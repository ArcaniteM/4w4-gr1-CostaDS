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
            $titre = get_the_title();
            //echo $category->slug;
            if ($category->slug == "cours"){
               $sigle = substr($titre, 0, 7);
               $titre_long = substr($titre, 7, -5);
               $duree = "90";
               $titre = $sigle;
            }

         ?>
            <article>
            <h2><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h2>
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