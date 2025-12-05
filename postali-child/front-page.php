<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<section class="homepage-hero" style="background-image:url(<?php echo get_field('background_image') . checkWebpCompatibility(); ?>)">
    <div class="container">
        <div class="main-content-block">
            <?php the_field('main_content_block'); ?>

            <div class="hero-cta">
                <a href="tel:(702) 878-2889" class="pre-footer-cta">
                    <div class="left">
                    <!--spanish page--><?php if ( is_page(705) ) : ?>
                        <span>CONSULTA GRATIS</span>
                    <!--english page--><?php elseif ( !is_page(705) ): ?>	
                        <span>free consultation</span>
                        <?php endif ?>
                    </div>
                    <div class="right">
                        PH: (702) 878-2889
                    </div>
                </a>
            </div>

            <div class="spacer-30"></div>

            <!--spanish page--> <?php if ( is_page(705) ) : ?>
                <a href="/" class="en-espanol_hero" title="In English">English Speaking Version</a>
            <!--english page--><?php elseif ( !is_page(705) ): ?>	
                <a class="en-espanol_hero" title="En Español" href="/espanol/">Se Habla Español</a>
            <?php endif ?>


        </div>
        <div class="scroller">
            <!--spanish page--><?php if ( is_page(705) ) : ?>
                <span class="scroller-title">Resultados notables</span>
            <!--english page--><?php elseif ( !is_page(705) ): ?>	
                <span class="scroller-title">Notable Results</span>
            <?php endif ?>
            <?php

            $top_result_query = new WP_Query( array(
                'posts_per_page'         => 3,
                'post_type' => 'results',          // name of post type.
            ) );

            ?>
            <div id="result-slider-header">

                <?php while ( $top_result_query->have_posts() ) : $top_result_query->the_post(); ?>
                            
                <div class="slide">
                    <h2><?php the_field('amount'); ?></h2>
                    <span class="topics">
                         <!--spanish page--><?php if ( is_page(705) ) : ?>
                            <?php $spanish = the_field('spanish_topic');
                                if ( !empty( $spanish ) ) :
                                echo $spanish ?>
                            <?php endif ?>
                        <!--english page--><?php elseif ( !is_page(705) ): ?>	
                            <?php 
                                $resultTopics = get_the_terms( $post->ID, 'result_topic' );
                                foreach ( $resultTopics as $resultTopic ) {
                                echo $resultTopic->name; // or whatever value
                            }?>
                        <?php endif ?>
                        </span>

                </div>
                
                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</section>


<section class="panel-1 black">
    <div class="container">
        <div class="columns">
            <div class="column-full center centered">
                <?php the_field('panel_1_main_content'); ?>
            </div>
        </div>
    <div>
</section>

<section class="panel-2 grey">
    <div class="container wide">
        <div class="columns">
            <div class="column-66">
                <div class="pi-left">
                    <?php the_field('panel_2_pi_left'); ?>
                </div>
                <div class="pi-right">
                    <?php the_field('panel_2_pi_right'); ?>
                </div>
            </div>
            <div class="column-33" style="background-image:url(<?php echo get_field('panel_2_background_image') . checkWebpCompatibility(); ?>)">
                <?php if ( is_page(705) ) { ?>
                    <a href="/personal-injury/" title="Personal Injury" class="button-solid">APRENDER MÁS SOBRE LAS LESIONES PERSONALES</a>
                <?php } else { ?>
                    <a href="/personal-injury/" title="Personal Injury" class="button-solid">LEARN MORE ABOUT Personal Injury</a>   
                <?php } ?>
            </div>
        </div>
    <div>
</section>


<section class="panel-3 white">
    <div class="container">
        <p class="underlined caps"><?php the_field('panel_3_section_headline'); ?></p>
        <div class="spacer-30"></div>
        <div class="columns">
            <div class="column-50">
                <?php the_field('panel_3_section_content'); ?>
            </div>
            <div class="column-50">
                <?php the_field('panel_3_section_content_right'); ?>
            </div>
        </div>
    <div>
</section>

<?php get_template_part('block', 'awards'); ?>

<section class="panel-4 blue bordered">
    <div class="container skinny">
        <div class="columns">
            <div class="column-full center centered">
                <h2><?php the_field('panel_4_headline'); ?></h2>
                <p class="larger"><?php the_field('panel_4_subheadline'); ?></p>
            </div>
        </div>
        <div class="columns">
            <?php if( have_rows('attorney_details') ): ?>
            <?php while( have_rows('attorney_details') ): the_row(); ?>
                <div class="column-50">
                    <div class="attorney-details">
                        <img src="<?php the_sub_field('attorney_headshot'); ?>" class="attorney-headshot" alt="<?php the_sub_field('attorney_name'); ?>" style="<?php $headshot = the_sub_field('attorney_headshot'); if ( empty( $headshot ) ): ?> opacity: 0; <?php endif; ?>" >
                        <span class="spacer-15"></span>
                        <span class="attorney-name"><a href="<?php the_sub_field('attorney_link'); ?>" title="<?php the_sub_field('attorney_name'); ?>"><?php the_sub_field('attorney_name'); ?></a></span>
                        <p class="attorney-copy"><?php the_sub_field('attorney_copy'); ?></p>
                        <a href="<?php the_sub_field('attorney_link'); ?>" title="<?php the_sub_field('attorney_name'); ?>"  class="button"><?php the_sub_field('button_text'); ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="panel-5 white">
    <div class="container">
        <div class="columns">
            <div class="column-75 center centered">
                <?php the_field('panel_5_main_copy_block'); ?>
            </div>
            <div class="spacer-30"></div>
            <?php $n = 1; ?>
            <?php if( have_rows('panel_5_columns') ): ?>
            <?php while( have_rows('panel_5_columns') ): the_row(); ?>
                <div class="column-33 centered">
                    <span class="yellow-number"><?php echo $n; ?></span>
                    <p class="smaller"><?php the_sub_field('headline'); ?></p>
                    <p><?php the_sub_field('copy'); ?></p>
                    <?php $n++; ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="spacer-30"></div>
        </div>
    <div>
</section>

<section class="panel-6 lt-blue">
    <div class="container">
        <div class="columns">
            <?php if ( is_page(705) ) { ?>
                <div class="result-header">COMENTARIOS DE CLIENTES</div>
            <?php } else { ?>
                <div class="result-header">Client Reviews</div>
            <?php } ?>
            <div class="spacer-60"></div>
            <div class="column-50">
                <?php the_field('panel_6_left_content'); ?>
            </div>
            <div class="column-50"> 
                <?php the_field('panel_6_right_content'); ?>
                <?php if ( is_page(705) ) { ?>
                    <a href="/testimonials/" class="button">VER MÁS COMENTARIOS</a>
                <?php } else { ?>
                    <a href="/testimonials/" class="button">View More Reviews</a>
                <?php } ?>
            </div>
        </div>
    <div>
</section>

<section class="panel-7" style="background-image:url(<?php echo get_field('panel_7_background_image') . checkWebpCompatibility(); ?>)">
    <div class="container">
        <div class="columns">
            <div class="column-50">
                <h2><?php the_field('panel_7_headline'); ?></h2>
                <div class="spacer-30"></div>
                <div class="cta-copy">
                    <p class="stripe"><?php the_field('panel_7_cta_copy'); ?></p>
                </div>
                <?php if ( get_field('panel_7_cta_text')) { ?>
                    <div class="spacer-30"></div>
                    <div class="hero-cta">
                        <a href="tel:<?php the_field('panel_7_cta_link'); ?>" class="pre-footer-cta">
                            <div class="left">
                                <?php the_field('panel_7_cta_text'); ?>
                            </div>
                            <div class="right">
                                PH: <?php the_field('panel_7_cta_link'); ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>