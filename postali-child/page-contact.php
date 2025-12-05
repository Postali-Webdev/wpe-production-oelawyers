<?php
/**
 * Template Name: Contact Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<section class="interior-hero" <?php if( get_field('background_image') ) { ?> style="background-image:url(<?php echo get_field('background_image'); ?>)" <?php } ?>>
    <div class="container">
        <div class="main-content-block">
        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
            <?php the_field('main_content_block'); ?>
        </div>
    </div>
</section>


<section class="page-contact">
    <div class="container filled">
        <div class="columns">
            <div class="column-contact"> 
                <div class="stripe">
                    <?php the_content(); ?>
                </div>
                <a class="footer-phone" href="tel:<?php the_field('global_phone','options'); ?>" title="Call Oronoz & Ericsson Today"><?php the_field('global_phone','options'); ?></a>
                <div class="spacer-break"></div>
                    <div class="column-33"><p><a href="<?php the_field('gmb_link','options'); ?>" title="Google Maps Address" target=_blank><?php the_field('global_address','options'); ?></a></p></div>
                    <div class="column-33"><p><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Oronoz & Ericsson Today"><?php the_field('global_email','options'); ?></a></p></div>
                    <div class="column-33">&nbsp;</div>
                <div class="spacer-15"></div>
                <iframe title="Location map" src="<?php the_field('map_link','options'); ?>" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="spacer-15"></div>
                </div>
            <div class="column-form"> 
                <div class="blue-fill">
                    <h3 class="centered">Contact us</h3>
                    <?php echo do_shortcode("[gravityform id='1' title='false']"); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>