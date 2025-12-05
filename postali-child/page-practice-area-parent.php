<?php
/**
 * Template Name: Practice Area - Parent
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<section class="interior-hero">
    <div class="container">
        <div class="columns">
            <div class="column-50 banner-copy">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
                <?php the_field('main_content_block'); ?>
                <div class="hero-cta">
                    <span>free consultation</span>
                    <a href="tel:702-878-2889" class="button-solid">PH: (702) 878-2889</a>
                </div>
            </div>
            <div class="column-50 banner-img">
                <img src="<?php echo get_field('background_image'); ?>" alt="">
            </div>
        </div>
    </div>
</section>


<section class="panel-1">
    <div class="container filled">
        <div class="columns">
            <div class="column-50">
                <?php the_field('panel_1_left_content'); ?>
            </div>
            <div class="column-50"> 
                <?php get_template_part('block', 'testimonial-slider');?>
            </div>
            <?php if ( get_field('video_url') ) : ?>
                <div class="yt-iframe-container">
                    <iframe class="ignore-lazy" width="560" height="315" src="<?php the_field('video_url'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            <?php endif; ?>
        </div>
    <div>
</section>

<?php get_template_part('block', 'awards'); ?>

<?php get_template_part('block', 'additional-topics');?>

<?php if( get_field('panel_3_main_copy_block') ) { ?>
<section class="panel-3 gray">
    <div class="container filled">
        <div class="columns">
            <div class="column-66 center">
                <?php the_field('panel_3_main_copy_block'); ?>
            </div>
        </div>
    <div>
</section>
<?php } ?>


<?php if( get_field('panel_4_left_content') ) { ?>
<section class="panel-4 gray">
    <div class="container filled-blue">
        <div class="columns">
            <div class="column-50">
                <?php the_field('panel_4_left_content'); ?>
            </div>
            <div class="column-50"> 
                <?php get_template_part('block', 'result-slider');?>
            </div>
        </div>
    <div>
</section>
<?php } ?>


<?php if( get_field('panel_4_left_content') ) { ?>
<section class="panel-5 gray">
    <div class="container filled">
        <div class="columns">
            <div class="column-66 center">
                <?php the_field('panel_5_main_copy_block'); ?>
            </div>
        </div>


    <?php if ( is_page([328]) ) : get_template_part('block', 'related-reading'); endif;?>

    <div>
</section>
<?php } ?>


<?php if( have_rows('slide_content') ): ?>
<section class="panel-6 gray">
    <div class="container filled">
        <div class="h2-container">
            <div class="arrows"><div class="prev-slide"><span class="icon-drw-chevron-left"></span></div><div class="next-slide"><span class="icon-drw-chevron-right"></span></div></div>
            <h2><?php the_field('slider_headline'); ?></h2>
        </div>
            <div class="spacer-60"></div>
            <div id="what-we-do">
                <?php while( have_rows('slide_content') ): the_row(); ?>
                    <div class="slide">
                        <h4><?php the_sub_field('slide_headline'); ?></h4><div class="stripe"><p><?php the_sub_field('slide_content'); ?></p></div>
                        <a href="<?php the_sub_field('page_link'); ?>" class="button" title="Learn more about <?php the_sub_field('slide_headline'); ?>">Learn more about <?php the_sub_field('slide_headline'); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
        <div>
</section>
<?php endif; ?>


<?php if( get_field('panel_7_main_copy_block') ) { ?>
<section class="panel-7 gray">
    <div class="container filled">
        <div class="columns">
            <div class="column-66 center">
                <?php the_field('panel_7_main_copy_block'); ?>
            </div>
        </div>
    <div>
</section>
<?php } ?>


<?php if( get_field('panel_8_cta_text') ) { ?>
<section class="panel-8" <?php if( get_field('background_image') ) { ?> style="background-image:url(<?php echo get_field('panel_8_background_image'); ?>)" <?php } ?>>
    <div class="container">
        <div class="main-content-block">
            <h2><?php the_field('panel_8_headline'); ?></h2>
            <?php if ( get_field('panel_8_cta_text')) { ?>
                <div class="hero-cta">
                    <a href="<?php the_field('panel_8_cta_link'); ?>" class="button-solid"><?php the_field('panel_8_cta_text'); ?></a>
                </div>
            <?php } ?>
        </div>
        <div class="spacer-90"></div>
        <div class="cta-copy">
            <p class="stripe"><?php the_field('panel_8_cta_copy'); ?></p>
        </div>
    </div>
</section>
<?php } ?>


<?php get_footer();?>