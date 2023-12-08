<?php if( have_rows('newsletter') ): ?>
    <?php while( have_rows('newsletter') ): the_row(); 
        // vars
        $nev = get_sub_field('nev'); 
        $szekhely = get_sub_field('szekhely'); 
        $email = get_sub_field('email'); 
        $web = get_sub_field('web'); ?>

        <ul>
            <li>Cég neve: <?php echo $nev; ?></li>
            <li>Székhelye: <?php echo $szekhely; ?></li>
            <li>E-mail címe: <?php echo $email; ?></li>
            <li>Weboldala: <?php echo $web; ?></li>
        </ul>

    <?php endwhile; ?>
<?php endif ?>