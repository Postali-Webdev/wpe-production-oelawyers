<?php
/**
 * Law Category Interior Page
 * Template Name: Interior
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section class="interior-hero" <?php if( get_field('background_image') ) { ?> style="background-image:url(<?php echo get_field('background_image'); ?>)" <?php } ?>>
    <div class="container">
        <div class="main-content-block">
        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
            <?php the_field('main_content_block'); ?>
        </div>
    </div>
</section>

<section class="gray">
    <div class="container filled">
        <?php the_content(); ?>
    </div>
</section>
	
<?php get_footer(); ?>