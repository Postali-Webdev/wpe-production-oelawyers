<?php
/**
 * Template Name: Practice Areas - Landing
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


<section class="practice-area-block">
    <div class="container">
        <div class="columns">

        <div class="spacer-60"></div>

        <h2>Accident Types</h2>
        <div class="spacer-30"></div>
        <?php if( have_rows('practice_areas','options') ): ?>
        <?php while( have_rows('practice_areas','options') ): the_row(); ?>
        <?php if( get_sub_field('practice_area_type') == 'accident' ): ?>
            <div class="column-33 accident">
                <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                    <div class="column-left">
                        <img src="<?php the_sub_field('practice_area_thumbnail'); ?>" alt="<?php the_sub_field('practice_area_title'); ?>" class="attorney-headshot">
                    </div>
                    <div class="column-right">
                        <span class="practice-area-title"><?php the_sub_field('practice_area_title'); ?></span>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="spacer-90"></div>

        <h2>Injury Types</h2>
        <div class="spacer-30"></div>
        <?php if( have_rows('practice_areas','options') ): ?>
        <?php while( have_rows('practice_areas','options') ): the_row(); ?>
        <?php if( get_sub_field('practice_area_type') == 'injury' ): ?>
            <div class="column-33 injury">
                <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                    <div class="column-left">
                        <img src="<?php the_sub_field('practice_area_thumbnail'); ?>" alt="<?php the_sub_field('practice_area_title'); ?>" class="attorney-headshot">
                    </div>
                    <div class="column-right">
                        <span class="practice-area-title"><?php the_sub_field('practice_area_title'); ?></span>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="spacer-90"></div>

        <h2>Criminal Defense</h2>
        <div class="spacer-30"></div>
        <?php if( have_rows('practice_areas','options') ): ?>
        <?php while( have_rows('practice_areas','options') ): the_row(); ?>
        <?php if( get_sub_field('practice_area_type') == 'defense' ): ?>
            <div class="column-33 injury">
                <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                    <div class="column-left">
                        <img src="<?php the_sub_field('practice_area_thumbnail'); ?>" alt="<?php the_sub_field('practice_area_title'); ?>" class="attorney-headshot">
                    </div>
                    <div class="column-right">
                        <span class="practice-area-title"><?php the_sub_field('practice_area_title'); ?></span>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer();?>