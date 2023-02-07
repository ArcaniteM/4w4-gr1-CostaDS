<?php /** index par defaut du theme */ ?>
<?php get_header(); ?>

    <main>
        <pres>front-page.php</pres>
        <h1>Bienvenue sur 4W4</h1>
        <?php if(have_posts()):
                while(have_posts()):the_post();   ?> 
                <article>
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <?php the_excerpt(); ?>
                    <?php the_content(); ?>
                    
                </article>
                <hr>
        <?php endwhile; ?>
        <?php endif; ?>
         
    </main>
    <?php get_footer(); ?>
</body>
</html>