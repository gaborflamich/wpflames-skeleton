<nav class="desktop-menu">
    <?php
        wp_nav_menu(
            array( 
                'theme_location' => 'menu-bottom',
                'menu_class'     => 'desktop-menu-list',
                'walker'         => new Walker_Desktop(),
            )
        );
    ?>
</nav>