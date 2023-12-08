<?php

// Single
// ****************************

defined( 'ABSPATH' ) || exit; 

get_header(); ?>

<div class="site-inner">
	<div class="content-full-width">
		<main class="content">
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile; ?>
		</main>
	</div>
</div>

<?php
get_footer();
