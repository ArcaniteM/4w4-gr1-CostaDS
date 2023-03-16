<footer class="site__footer">
    <?php  wp_nav_menu(array( 
            "menu" => "entete",
            "container" => "nav",
            "container_class" => "menu__entete"

    )); ?>
    <section class="lien">Lien #1</section>
    <section class="lien">Lien #2</section>
    <section class="lien">Lien #3</section>
</footer>
    <?php wp_footer(); ?>