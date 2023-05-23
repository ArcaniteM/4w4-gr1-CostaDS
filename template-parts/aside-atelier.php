<?php
/** 
 * Template permettant d afficher la zone asside
*/
?>
<aside class="site__aside_atelier">
    <h3>Menu secondaire</h3>
    <?php 
        // $menu peut prendre les valeurs : "note-4w4" ou "cours"
        $menu = "note-4w4";
        if(in_category("cours")){
            $menu = "cours";
        }
        echo $menu;
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
    )) ?>
</aside>
<?php //get_template_part("template-parts/aside.scss")?>