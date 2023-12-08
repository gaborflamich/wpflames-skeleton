<div class="sliding-menu-container" id="sliding-menu">
    <nav class="sliding-menu-nav"> 
        <?php
            
            class Custom_Nav_Walker extends Walker_Nav_Menu {

                 // Statikus számláló az egyedi azonosítókhoz
                private static $submenuIdCounter = 1;

                function start_lvl(&$output, $depth = 0, $layer_depth = 1, $args = array()) {
                    $indent = str_repeat("\t", $depth);
                    $submenu_class = 'sub-menu hide layer' . ($depth + 1); 
                
                    if ($depth === 0) {
                        // Növeljük a számlálót és hozzáadjuk az egyedi azonosítót
                        $submenuId = 'layer2-' . self::$submenuIdCounter++;
                        $output .= "\n$indent<ul class=\"sub-menu hide layer1\" id=\"$submenuId\">\n";
                        $output .= "<li><button class='nav-link l1 back-link' value='1' id='l2'>← Back</button></li>\n";
                    } elseif ($depth === 1) {
                        // Növeljük a számlálót és hozzáadjuk az egyedi azonosítót
                        $submenuId = 'layer3-' . self::$submenuIdCounter++;
                        $output .= "\n$indent<ul class=\"sub-menu hide layer2\" id=\"$submenuId\">\n";
                        $output .= "<li><button class='nav-link l1 back-link' value='2' id='l2'>← Back</button></li>\n";
                    }
                    // if ($depth === 0) {
                    //     // Főmenü (első szint) esetén
                    //     $output .= "\n$indent<ul class=\"$submenu_class\" id=\"layer2\">\n";
                    //     $output .= "<li><button class='nav-link l1 back-link' value='0' id='l2'>← Back</button></li>\n";
                    // } elseif ($depth === 1) {
                    //     // Második szintű menü esetén
                    //     $output .= "\n$indent<ul class=\"$submenu_class\" id=\"layer3\">\n";
                    //     $output .= "<li><button class='nav-link l1 back-link' value='1' id='l2'>← Back</button></li>\n";
                    // } elseif ($depth === 2){
                    //     // Harmadik szint esetén
                    //     $output .= "\n$indent<ul class=\"$submenu_class\">\n";
                    //     $output .= "<li><button class='nav-link l1 back-link' value='2' id='l2'>← Back</button></li>\n";
                    // }
                }

                function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
                    $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

                    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($item->classes), $item, $args, $depth));
                    $class_names = ' class="' . esc_attr($class_names) . '"';
            
                    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
                    $id = ' id="' . esc_attr($id) . '"';
            
                    $output .= $indent . '<li' . $id . $class_names . '>';
            
                    $atts = array();
                    $atts['class'] = 'l1';
                    $atts['href'] = !empty($item->url) ? $item->url : '';
            
                    // Adjuk hozzá a megfelelő value attribútumot a mélységi szint alapján
                    if ($depth === 0) {
                        $atts['value'] = '1';
                    } elseif ($depth === 1) {
                        $atts['value'] = '2';
                    } elseif ($depth === 2) {
                        $atts['value'] = '3 ';
                    }

                    // Adjunk hozzá egy egyedi osztályt vagy attribútumot, ha vannak gyermek elemei
                    if (in_array('menu-item-has-children', $item->classes)) {
                        $atts['class'] .= ' has-children';
                    }
            
                    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
            
                    $attributes = '';
                    foreach ($atts as $attr => $value) {
                        if (!empty($value)) {
                            $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                            $attributes .= ' ' . $attr . '="' . $value . '"';
                        }
                    }
            
                    $title = apply_filters('the_title', $item->title, $item->ID);
                    $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);
            
                    $item_output = $args->before;
                    $item_output .= '<a' . $attributes . '>';
                    $item_output .= $args->link_before . $title . $args->link_after;
                    $item_output .= '</a>';
                    $item_output .= $args->after;
            
                    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
                }
            }
            
            wp_nav_menu(
                array( 
                    'theme_location' => 'menu-1',
                    'walker'         => new Custom_Nav_Walker(),
                )
            );
        ?>
        <nav>
</div>


