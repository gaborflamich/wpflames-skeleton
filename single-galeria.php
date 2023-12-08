<?php

// Single
// ****************************

defined( 'ABSPATH' ) || exit; 

get_header();
?>

<div class="site-inner">

	<div class="content-full-width">

		<main class="content">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Előző:', 'underscore' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Következő:', 'underscore' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

			endwhile; 
			?>

		</main>
	</div>
</div>

<?php
get_footer();
