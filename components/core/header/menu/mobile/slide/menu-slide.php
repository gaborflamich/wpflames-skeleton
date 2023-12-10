<div class="sliding-menu-container" id="sliding-menu">
    <nav class="sliding-menu-nav"> 
        <?php
            wp_nav_menu(
                array( 
                    'theme_location' => 'menu-mobile',
                    'walker'         => new Walker_Mobile(),
                )
            );
        ?>
        <nav>
</div>


