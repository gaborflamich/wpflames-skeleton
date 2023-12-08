<?php
defined( 'ABSPATH' ) || exit; ?>

<article class="gallery-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="gallery-card-link" href="<?php the_permalink(); ?>">
	<figure>
		<?php add_featured_image(); ?>
		<figcaption class="gallery-card-title">
			<?php the_title(); ?>
		</figcaption>
	</figure>
	</a>
</article>