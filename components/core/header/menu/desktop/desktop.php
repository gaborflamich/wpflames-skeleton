<nav class="desktop-menu">
    <?php
    class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

        function start_lvl(&$output, $depth = 0, $args = array()) {
            $indent = str_repeat("\t", $depth);
            $submenu_class = 'sub-menu-' . ($depth + 1); 
            $output .= "\n$indent<ul class=\"$submenu_class\">\n";
        }
    }
        wp_nav_menu(
            array( 
                'theme_location' => 'menu-1',
                'menu_class'     => 'desktop-menu-list',
                'walker'         => new Custom_Walker_Nav_Menu(),
            )
        );
    ?>
</nav>