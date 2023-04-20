<?php /** index par defaut du theme */ ?>
<?php get_header(); ?>

<main class="erreur404 site__main">
        
    <h1 class="erreur404__titre">Erreur 404</h1>
            
    <h2 class="erreur404__soustitre">Page introuvable, vous pouvez tenter une recherche</h2>
            
    <?= get_search_form(); ?>  
    <h2 class="erreur404__soustitre">Nos choix de cours</h2>   
        <?php 
                wp_nav_menu(array(
                "menu"=>"cours",
                "container_class"=>"erreur__404__menu",
                "container"=>"nav")); 
        ?>
    <h2 class="erreur404__soustitre">Les notes de cours</h2>
        <?php  wp_nav_menu(array(
                    "menu"=>"note-4w4",
                    "container_class"=>"erreur__404__menu",
                    "container"=>"nav"));   
        ?>     
    
    </main>
    <?php get_footer(); ?>
</body>
</html>