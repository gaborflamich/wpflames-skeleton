<?php if( have_rows('tarhelyszolgaltato') ): ?>
    <?php while( have_rows('tarhelyszolgaltato') ): the_row(); 
        // vars
        $nev = get_sub_field('nev'); 
        $cim = get_sub_field('levelezesi_cim'); 
        $email = get_sub_field('email'); 
        $telefon = get_sub_field('telefon'); 
        $web = get_sub_field('web'); ?>

        <ul>
            <li>Név: <?php echo $nev; ?></li>
            <li>Levelezési cím: <?php echo $cim; ?></li>
            <li>E-mail: <?php echo $email; ?></li>
            <li>Telefonszám: <?php echo $telefon; ?></li>
            <li>Weboldal: <?php echo $web; ?></li>
        </ul>

    <?php endwhile; ?>
<?php endif ?>