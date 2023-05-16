<?php /** front page par defaut du theme */ ?>
<?php get_header(); ?>

    <main class="site__main">
        <pre>front-page.php</pre>
        <h1>Bienvenue sur 4W4</h1>
        <h2>Les evenements a venir</h2>
        <section class="blocflex">
            
                <?php wp_nav_menu(array(
                    "menu" => "evenement",
                    "container" => "nav"
                )); ?>
            
        </section>
        <h2>Les articles archivés</h2>
        <section class="blocflex">         
            
                <?php wp_nav_menu(array(
                    "menu" => "bloc-archive",
                    "container" => "nav"
                )); ?>
            
        </section>
        <section class="blocflex">
            <?php if(have_posts()):
                while (have_posts()): the_post();  
                    $la_categorie = 'note-4w4';
                    if (in_category('galerie')){
                        $la_categorie = 'galerie';}
                       
                    get_template_part("template-parts/categorie",$la_categorie);   
                    endwhile;
               
        endif;
             ?>   
        </section>
    </main>

    <?php get_footer(); ?>
	
</body>
</html>