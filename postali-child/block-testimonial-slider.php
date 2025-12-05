<?php

$testimonials_query = new WP_Query( array(
	'posts_per_page'         => 3,
    'post_type' => 'testimonials',
    'order' => 'ASC',
    'testimonial_language' => 'english',          // name of post type.  
) );

$testimonials_query_spanish = new WP_Query( array(
	'posts_per_page'         => 3,
    'post_type' => 'testimonials',
    'order' => 'ASC',          // name of post type. 
    'testimonial_language' => 'spanish', 
) );

?>

<div class="results-container">
    <!--spanish page--> <?php if ( is_page(705) ) : ?>
        <div class="result-header">Comentarios de clients</div>
            <div id="testimonial-slider">
                <?php while ( $testimonials_query_spanish->have_posts() ) : $testimonials_query_spanish->the_post(); ?>
                                
                    <div class="slide">
                        <h4>"<?php the_title(); ?>"</h4>
                        <?php the_excerpt(); ?>
                        <span class="topics"><?php the_field('testimonial_author'); ?></span>
                    </div>
        
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
        <a href="/testimonials/" class="button">Ver Más Resultados</a>
    
    <!--english page--><?php elseif ( !is_page(705) ): ?>	
        <div class="result-header">Client Reviews</div>
            <div id="testimonial-slider">
                <?php while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); ?>
                                
                    <div class="slide">
                        <h4>"<?php the_title(); ?>"</h4>
                        <?php the_excerpt(); ?>
                        <span class="topics"><?php the_field('testimonial_author'); ?></span>
                    </div>
        
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
        <a href="/testimonials/" class="button">View More Reviews</a>

    <?php endif ?>
</div>
