<?php /** index par defaut du theme */ ?>
<?php get_header(); ?>

    <main class="site__main page404">
    <pres>404.php</pres>
        <h1>Bienvenue sur 4W4</h1>
        <h1>Erreur 404</h1>
        <p class="msg404">Page introuvable, veuillez tenter une recherche</p>
        <div class="menu__recherche recherche404"> 
            <?= get_search_form(); ?>        
            </label> 
        </div> 
    </main>
    <?php get_footer(); ?>
</body>
</html>