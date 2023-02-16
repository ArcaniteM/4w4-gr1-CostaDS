<?php /** index par defaut du theme */ ?>
<?php get_header(); ?>

    <main>
        <pres>front-page.php</pres>
        <h1>Bienvenue sur 4W4</h1>
        <section class="blocflex">
            <?php if(have_posts()):
                while (have_posts()): the_post(); ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php // get_the_excerpt() ?>
                    <hr>
                    <?= wp_trim_words(get_the_excerpt(), 10, " ... "); ?>
                </article>
                <?php endwhile; ?>
            <?php  endif; ?>
        </section>
         
    </main>
    <?php get_footer(); ?>
</body>
</html>