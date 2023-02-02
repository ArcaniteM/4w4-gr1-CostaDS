<?php /** index par defaut du theme */ ?>
<?php get_header(); ?>
<body>
    <main>
        <pres>front-page.php</pres>
        <h1>Bienvenue sur 4W4</h1>
        <?php if(have_posts()):
                while(have_posts()):
                    the_post(); //extraire un objet post ?>
                    <article>
                        <?php the_title('<h3>', '</h3>');//affiche le titre du post?> 
                        
                        <h6> Extrait: </h6> <?php the_excerpt(); //show extrait ?> 
                        <h6> Contenu: </h6> <?php the_content(); //afficher le contenu ?>
                    </article>
                <?php endwhile; ?>
        <?php endif; ?>
    </main>
    <?php get_footer(); ?>
</body>
</html>