<?php if( have_rows('adatkezelo') ): ?>
    <?php while( have_rows('adatkezelo') ): the_row(); 
        // vars
        $nev = get_sub_field('nev'); 
        $szekhely = get_sub_field('szekhely'); 
        $email = get_sub_field('email'); 
        $telefon = get_sub_field('telefon'); 
        $web = get_sub_field('web'); ?>

        <ul>
            <li>Név: <?php echo $nev; ?></li>
            <li>Székhely: <?php echo $szekhely; ?></li>
            <li>E-mail: <?php echo $email; ?></li>
            <li>Telefonszám: <?php echo $telefon; ?></li>
            <li>Weboldal: <?php echo $web; ?></li>
        </ul>

    <?php endwhile; ?>
<?php endif ?>