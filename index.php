<?php /** index par defaut du theme */ ?>
<?php get_header(); ?>
<body>
    <main>
        <h1>Bienvenue sur 4W4</h1>
        <?php if(have_posts()):
                    while(have_posts()):
                        the_post(); //extraire un objet post 
                        the_title(); //affiche le titre du post
                        
                    endwhile;
                endif; ?>
    </main>
    <?php get_footer(); ?>
</body>
</html>