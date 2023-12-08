<?php if( have_rows('invoice') ): ?>
    <?php while( have_rows('invoice') ): the_row(); 
        // vars
        $nev = get_sub_field('nev'); 
        $szekhely = get_sub_field('szekhely'); 
        $telefon = get_sub_field('telefon'); 
        $email = get_sub_field('email'); 
        $web = get_sub_field('web'); ?>

        <ul>
            <li>Adatfeldolgozó megnevezése: <?php echo $nev; ?></li>
            <li>Adatfeldolgozó székhelye: <?php echo $szekhely; ?></li>
            <li>Adatfeldolgozó telefonszáma: <?php echo $telefon; ?></li>
            <li>Adatfeldolgozó e-mail címe: <?php echo $email; ?></li>
            <li>Adatfeldolgozó weboldala: <?php echo $web; ?></li>
        </ul>

    <?php endwhile; ?>
<?php endif ?>