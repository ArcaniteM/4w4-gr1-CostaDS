<?php /** index par defaut du theme */ ?>
<?php get_header(); ?>

    <main class="site__main page404">
        
        <div class="content404">
            <pres>404.php</pres>
            <h1>Bienvenue sur 4W4</h1>
            <h1>Erreur 404</h1>
            <p class="msg404">Page introuvable, veuillez tenter une recherche</p>
                <div class="menu__recherche recherche404"> 
                    <?= get_search_form(); ?>        
                    </label> 
                </div> 
            
            <div class="menu__array">
                <?php 
                    // $menu peut prendre les valeurs : "note-4w4" ou "cours"
                    $menu2 = "note-4w4";
                    $menu1 = "cours";?>
                    <div class="titleNav_404">
                        <?php echo "Nos choix de cours"; ?>
                    </div>
                    
                <?php 
                        wp_nav_menu(array(
                        "menu"=>$menu1,
                        "container"=>"nav"
                    ))
                ?>
                    
                
                    <div class="titleNav_404">
                        <?php echo "Les notes de cours"; ?> 
                    </div>
                   
                <?php    wp_nav_menu(array(
                        "menu"=>$menu2,
                        "container"=>"nav"
                    ))
                    
                ?>
            </div>
            
        </div>
    
    
    </main>
    <?php get_footer(); ?>
</body>
</html>