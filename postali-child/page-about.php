<?php
/**
 * Template Name: About Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<section class="interior-hero" <?php if( get_field('background_image') ) { ?> style="background-image:url(<?php echo get_field('background_image'); ?>)" <?php } ?>>
    <div class="container">
        <div class="main-content-block">
        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
            <?php the_field('main_content_block'); ?>
            <div class="hero-cta">
                <span>free consultation</span>
                <a href="tel:702-878-2889" class="button-solid">PH: (702) 878-2889</a>
            </div>
        </div>
    </div>
</section>


<section class="panel-1">
    <div class="container">
        <div class="columns">
            <div class="column-75 center">
                <div class="centered"><?php the_field('panel_1_main_copy_block'); ?></div>
            </div>
        </div>
    <div>
</section>

<?php get_template_part('block', 'awards'); ?>


<section class="panel-2">
    <div class="container filled">
        <div class="columns">
            <div class="column-50">
                <?php the_field('panel_2_left_content'); ?>
            </div>
            <div class="column-50" <?php if( get_field('background_image') ) { ?> style="background-image:url(<?php echo get_field('right_content_background'); ?>)" <?php } ?>>
                <div class="underlay"><?php the_field('panel_2_right_content'); ?></div>
            </div>
        </div>
    <div>
</section>


<section class="panel-3">
    <div class="container filled">
        <div class="columns">
            <div class="column-66"><h2><?php the_field('panel_3_headline'); ?></h2>
            <p class="smaller yellow"><?php the_field('panel_3_subheadline'); ?></p>
            <p class="larger stripe"><?php the_field('panel_3_main_copy_block'); ?></p>
            </div>
            <div class="columns">
                <?php if( have_rows('attorney_details') ): ?>
                <?php while( have_rows('attorney_details') ): the_row(); ?>
                    <div class="column-33">
                        <div class="attorney-details">
                            <span class="attorney-image">
                                <img src="<?php the_sub_field('attorney_headshot'); ?>" class="attorney-headshot" alt="<?php the_sub_field('attorney_name'); ?>" style="<?php $headshot = the_sub_field('attorney_headshot'); if ( empty( $headshot ) ): ?> opacity: 0; <?php endif; ?>" >
                            </span>
                            <span class="spacer-15"></span>
                            <span class="attorney-content">
                                <span class="attorney-name"><a href="<?php the_sub_field('attorney_link'); ?>" title="<?php the_sub_field('attorney_name'); ?>"><?php the_sub_field('attorney_name'); ?></a></span>
                                <p class="attorney-copy stripe"><?php the_sub_field('attorney_copy'); ?></p>
                                <a href="<?php the_sub_field('attorney_link'); ?>" title="<?php the_sub_field('attorney_name'); ?>"  class="button"><?php the_sub_field('button_text'); ?></a>
                            </span>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div> 
        </div>
    <div>
</section>


<section class="panel-4">
    <div class="container">
        <!--<div class="columns">-->
            <!--<div class="column-75 center">-->
            <div class="centered">
                <?php the_field('panel_4_main_copy_block'); ?>
                <!-- <div class="practice-areas"> -->
                <div class="practice-area-list">
                    <div class="pa-list">
                        <div class="spacer-15"></div>
                        <div class="accordions practice-areas">
                            <div class="accordions_title">
                                <p class="smaller-yellow">Accidents</p><span></span>
                            </div>
                            <?php if( have_rows('practice_areas','options') ): ?>
                                <div class="accordions_content">
                                    <ul>
                                    <?php while( have_rows('practice_areas','options') ): the_row(); ?>
                                        <?php if (get_sub_field('practice_area_type') == 'accident') { ?> <!-- if accident type -->
                                            <li>
                                                <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                                                    <span class="practice-area-title"><?php the_sub_field('practice_area_title'); ?></span>
                                                </a>
                                            </li>
                                        <?php } ?>  
                                    <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="pa-list">
                        <div class="spacer-15"></div>
                        <div class="accordions practice-areas">
                            <div class="accordions_title">
                                <p class="smaller-yellow">Injuries</p><span></span>
                            </div>
                            <?php if( have_rows('practice_areas','options') ): ?>
                                <div class="accordions_content">
                                    <ul>
                                    <?php while( have_rows('practice_areas','options') ): the_row(); ?>
                                        <?php if (get_sub_field('practice_area_type') == 'injury') { ?> <!-- if accident type -->
                                            <li>
                                                <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                                                    <span class="practice-area-title"><?php the_sub_field('practice_area_title'); ?></span>
                                                </a>
                                            </li>
                                        <?php } ?>  
                                    <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="pa-list">
                        <div class="spacer-15"></div>
                        <div class="accordions practice-areas">
                            <div class="accordions_title">
                                <p class="smaller-yellow">Criminal Defense</p><span></span>
                            </div>
                            <?php if( have_rows('practice_areas','options') ): ?>
                                <div class="accordions_content">
                                    <ul>
                                    <?php while( have_rows('practice_areas','options') ): the_row(); ?>
                                        <?php if (get_sub_field('practice_area_type') == 'defense') { ?> <!-- if accident type -->
                                            <li>
                                                <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                                                    <span class="practice-area-title"><?php the_sub_field('practice_area_title'); ?></span>
                                                </a>
                                            </li>
                                        <?php } ?>  
                                    <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--</div>-->
        <!--</div>-->
    <div>
</section>


<section class="panel-5">
    <div class="container filled">
        <div class="columns">
            <div class="column-50">
                <?php the_field('panel_5_left_content'); ?>
            </div>
            <div class="column-50"> 
                <?php get_template_part('block', 'result-slider');?>
            </div>
        </div>
    <div>
</section>


<section class="panel-6">
    <div class="container">
        <div class="h2-container">
            <div class="arrows"><div class="prev-slide"><span class="icon-drw-chevron-left"></span></div><div class="next-slide"><span class="icon-drw-chevron-right"></span></div></div>
            <h2><?php the_field('slider_headline'); ?></h2>
        </div>
            <div class="spacer-60"></div>
            <div id="what-we-do">
                <?php if( have_rows('slide_content') ): ?>
                <?php while( have_rows('slide_content') ): the_row(); ?>
                    <div class="slide">
                        <h4><?php the_sub_field('slide_headline'); ?></h4><div class="stripe"><p><?php the_sub_field('slide_content'); ?></p></div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <div>
</section>


<section class="panel-7" <?php if( get_field('background_image') ) { ?> style="background-image:url(<?php echo get_field('panel_7_background_image'); ?>)" <?php } ?>>
    <div class="container">
        <div class="main-content-block">
            <h2><?php the_field('panel_7_headline'); ?></h2>
            <?php if ( get_field('panel_7_cta_text')) { ?>
                <div class="hero-cta">
                    <a href="<?php the_field('panel_7_cta_link'); ?>" class="button-solid"><?php the_field('panel_7_cta_text'); ?></a>
                </div>
            <?php } ?>
        </div>
        <div class="spacer-90"></div>
        <div class="cta-copy">
            <p class="stripe"><?php the_field('panel_7_cta_copy'); ?></p>
        </div>
    </div>
</section>


<?php get_footer();?>