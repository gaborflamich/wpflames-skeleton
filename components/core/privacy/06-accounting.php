<?php if( have_rows('accountant') ): ?>
    <?php while( have_rows('accountant') ): the_row(); 
        // vars
        $nev = get_sub_field('nev'); 
        $szekhely = get_sub_field('szekhely'); 
        $email = get_sub_field('email'); 
        $telefon = get_sub_field('telefon'); 
        $web = get_sub_field('web'); ?>

        <ul>
            <li>Az adatfeldolgozó megnevezése: <?php echo $nev; ?></li>
            <li>Az adatfeldolgozó székhelye: <?php echo $szekhely; ?></li>
            <li>Az adatfeldolgozó e-mail címe: <?php echo $email; ?></li>
            <li>Az adatfeldolgozó telefonszáma: <?php echo $telefon; ?></li>
            <li>Az adatfeldolgozó weboldala: <?php echo $web; ?></li>
        </ul>

    <?php endwhile; ?>
<?php endif ?>