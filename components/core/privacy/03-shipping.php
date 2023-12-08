<?php if( have_rows('szallitas') ): ?>
    <?php while( have_rows('szallitas') ): the_row(); 

        $nev = get_sub_field('nev'); 
        $szekhely = get_sub_field('szekhely'); 
        $email = get_sub_field('email'); 
        $telefon = get_sub_field('telefon'); 
        $web = get_sub_field('web'); ?>

        <ul>
            <li>Címzett megnevezése: <?php echo $nev; ?></li>
            <li>Címzett székhelye: <?php echo $szekhely; ?></li>
            <li>Címzett e-mail címe: <?php echo $email; ?></li>
            <li>Címzett telefonszáma: <?php echo $telefon; ?></li>
            <li>Címzett weboldala: <?php echo $web; ?></li>
        </ul>               
    <?php endwhile; ?>
<?php endif ?>