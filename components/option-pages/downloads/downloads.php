<div class="download-wrapper">

    <?php if( have_rows('download_repeater', 'option') ): ?>
        <?php while( have_rows('download_repeater', 'option') ): the_row(); ?>

            <?  $title = get_sub_field('title', 'option'); 
                $pdf = get_sub_field('pdf', 'option'); 
            ?>
            <a class="download" href="<?= $pdf; ?>">
                <i class="icon icon-pdf-white"></i>
                <div class="download-text"><?= $title; ?></div>
            </a>

        <?php endwhile; ?>
    <?php endif; ?>
		
</div>