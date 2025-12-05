<?php

$result_query = new WP_Query( array(
	'posts_per_page'         => 3,
	'post_type' => 'results',          // name of post type.
) );


?>

<div class="results-container">
    <!--spanish page--><?php if ( is_page(705) ) : ?>
        <div class="result-header">Resultados del Caso</div>
    <!--english page--><?php elseif ( !is_page(705) ): ?>	
        <div class="result-header">Case Results</div>
    <?php endif ?>
    <div id="result-slider">
        <?php while ( $result_query->have_posts() ) : $result_query->the_post(); ?>
            <div class="slide">
                <h2><?php the_field('amount'); ?></h2>

                <!--spanish page--><?php if ( is_page(705) ) : ?>
                    <?php $translation = get_field('spanish_excerpt');

                    if ( !empty( $translation ) ) : ?>
                        
                            <span class="larger"><p><?php echo $translation; ?></p></span>
                            <span class="topics">
                                <span class="yellow">Tema // </span>
                                <?php the_field('spanish_topic'); ?>
                            </span>
                    
                    <?php else : ?>
                        <span></span>
                    <?php endif ?>
                    
                <!--english page--><?php elseif ( !is_page(705) ): ?>
                    <span class="larger"><?php the_excerpt(); ?></span>
                    <span class="topics"><span class="yellow">Topic // </span><?php 
                        $resultTopics = get_the_terms( $post->ID, 'result_topic' );
                        foreach ( $resultTopics as $resultTopic ) {
                        echo $resultTopic->name; // or whatever value
                        }
                    ?></span>
                <?php endif ?>   

            </div> 
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>
<!--spanish page--><?php if ( is_page(705) ) : ?>
    <a href="/case-results/" class="button">Ver Más Resultados de Casos</a>
<!--english page--><?php elseif ( !is_page(705) ): ?>	
    <a href="/case-results/" class="button">View More Case Results</a>
<?php endif ?>
