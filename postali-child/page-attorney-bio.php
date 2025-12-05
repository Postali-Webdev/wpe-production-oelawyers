<?php
/**
 * Template Name: Attorney Bio
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<section class="interior-hero">
    <div class="container">
        <div class="attorney-columns">
            <div class="main-content-block">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
                <div class="attorney-headshot" <?php if( get_field('attorney_headshot') ) { ?> style="background-image:url(<?php echo get_field('attorney_headshot'); ?>)" <?php } ?>></div>
            </div>
            <div class="attorney-details-block" style="<?php $headshot = get_field('attorney_headshot'); if ( empty( $headshot ) ): ?> margin-left: 10%; <?php endif; ?>" >
                <h1><span class="small yellow">Attorney </span><?php the_title(); ?></h1>
                <div class="spacer-30"></div>
                <a class="button-solid" href="tel:702-878-2889" title="Call Oronoz & Ericsson Today">PH: (702) 878-2889</a>
                <a class="button-solid" href="/contact/" title="Contact Oronoz & Ericsson Today">Online Form</a>
            </div>
        </div>
    </div>
</section>


<section class="panel-1">
    <div class="container filled">
        <div class="columns">
            <div class="column-33" style="<?php $headshot = get_field('attorney_headshot'); if ( empty( $headshot ) ): ?> display: none; <?php endif; ?>"></div>
            <div class="column-66" style="<?php $headshot = get_field('attorney_headshot'); if ( empty( $headshot ) ): ?> flex-basis: 90%; margin-left: 5%; <?php endif; ?>">
                <p class="larger"><?php the_field('intro_paragraph'); ?></p>
            </div>
            </div>
        </div>
    <div>
</section>


<section class="panel-2">
    <div class="container filled">
        <div class="columns">
            <div class="column-66 center">
                <?php the_field('top_copy_block'); ?>
            </div>
        </div>
    <div>
</section>


<section class="panel-3">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <div class="centered">
                    <h3 class="centered"> <?php the_title(); ?>'s Practice Areas Include</h3>
                    <div class="spacer-30"></div>
                    <ul class="three-column">
                    <?php if( have_rows('practice_areas','options') ): ?>
                    <?php while( have_rows('practice_areas','options') ): the_row(); ?>
                        <li>
                            <a href="<?php the_sub_field('practice_area_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                                <span class="practice-area-title"><?php the_sub_field('practice_area_title'); ?></span>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    <div>
</section>


<section class="panel-4">
    <div class="container filled">
        <div class="columns">
            <h3 class="centered">More about <?php the_title(); ?></h3>
            <div class="spacer-60"></div>
            <div class="column-50">
                <?php if( have_rows('left_column') ): ?>
                <?php while( have_rows('left_column') ): the_row(); ?>
                    <h4><?php the_sub_field('section_title'); ?></h4>
                    <div class="stripe"><?php the_sub_field('list_items'); ?></div>
                    <div class="spacer-60"></div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="column-50"> 
                <?php if( have_rows('right_column') ): ?>
                <?php while( have_rows('right_column') ): the_row(); ?>
                    <h4><?php the_sub_field('section_title'); ?></h4>
                    <div class="stripe"><?php the_sub_field('list_items'); ?></div>
                    <div class="spacer-60"></div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <div>
</section>


<?php get_footer();?>