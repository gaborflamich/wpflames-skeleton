<?php

// Archive
// ****************************

defined( 'ABSPATH' ) || exit; 

get_header(); ?>

<div class="site-inner">

    <div class="content-full-width">

        <main class="content">

        <?php 

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

		$args = array(
            'post_type' => 'eredmenyek',
			'posts_per_page' => 10,
  			'paged'          => $paged
		);

		$the_query = new WP_Query( $args ); ?>

            <header class="page-header">
                <h1 class="entry-title">Eredményeink</h1>
            </header>

                <?php 
                the_posts_pagination( 
                    array( 
                        'mid_size'  => 2, 
                        'prev_text' => __( 'Előző', 'wpflames' ),
                        'next_text' => __( 'Következő', 'wpflames' )    
                    ) ); 
                if ($the_query-> have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        get_template_part( 'template-parts/content', 'eredmenyek' );
                    endwhile;
                    the_posts_pagination( 
                        array( 
                            'mid_size'  => 2, 
                            'prev_text' => __( 'Előző', 'wpflames' ),
                            'next_text' => __( 'Következő', 'wpflames' )    
                        ) ); 
                endif; ?>

        </main>
    </div>
</div>
<?php get_footer(); ?>