<?php
/**
 * Template Name: Practice Area - Child
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
                <div class="spacer-30"></div>
                <div class="hero-cta">
                    <span>free consultation</span>
                    <a href="tel:702-878-2889" class="button-solid">PH: (702) 878-2889</a>
                </div>
            </div>
            <div class="column-50 banner-img">
                <?php if(get_field('background_image')) { ?>
                <img src="<?php echo get_field('background_image'); ?>" alt="">
                <?php } else { ?>
                <?php $parent_id = wp_get_post_parent_id( get_the_ID() ); ?>
                <img src="<?php echo get_field('background_image', $parent_id); ?>" alt="">
                <?php } ?>
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
        </div>
    <div>
</section>

<?php if ( is_page(1101) ) { // Drafted Lyft & Uber Accident Page ?>
    
    <section class="panel-2" id="rideshare-scenarios">
        <div class="container filled center">
            <h2>Which Scenario Fits Your Accident?</h2>
            <div class="spacer-60">&nbsp;</div>
            <div class="columns">
            <?php if ( have_rows('scenarios') ):
                    $i          =   1;
                while ( have_rows('scenarios') ) : the_row(); 
                    $title      =   get_sub_field('rideshare_title');
                    $desc       =   get_sub_field('description');
                    $cta        =   get_sub_field('link_cta');
                    $page       =   get_page_link();
                    //$url        =   substr_replace($page ,"", -1);
                    $link       =   $page . '#scenario' . $i;
                ?>
                    <div class="column-33 centered">
                        <span class="yellow-number"><?php echo $i; ?></span>
                        <div class="spacer-30">&nbsp;</div>
                        <h3 class="smaller"><?php echo $title; ?></h3>
                        <p><?php echo $desc; ?></p>
                        <a class="button" href="<?php echo $link; ?>" title="<?php echo $title; ?>"><?php echo $cta; ?></a>
                        <?php $i++; ?>
                    </div>
                <?php endwhile;
            endif; ?>
            </div>
        </div>
    </section>
    
    <section class="gray">
        <div class="container filled">
            <div class="columns">
                <div class="column-75 center">
                    <?php the_field('rideshare_causes'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php if ( have_rows('scenarios') ):
            $i          =   1;
        while ( have_rows('scenarios') ) : the_row(); 
            $title      =   get_sub_field('rideshare_title');
            $id         =   'scenario' . $i;
            $content    =   get_sub_field('content');
        ?>
            <section class="rideshare-panel gray" id="<?php echo $id; ?>">
                <div class="container filled">
                    <div class="columns">
                        <div class="column-75 center">
                            <div class="title-container">
                                <span class="yellow-number"><?php echo $i; ?></span>
                                <h2><?php echo $title; ?></h2>
                            </div>
                            <?php echo $content; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php $i++;
        endwhile;
    endif; ?>

    <section class="gray">
        <div class="container filled">
            <div class="columns">
                <div class="column-75 center">
                    <?php the_field('rideshare_coverage'); ?>
                </div>
            </div>
        </div>
    </section>

<?php } else { ?>
    <section class="gray">
        <div class="container filled">
            <div class="columns">
                <div class="column-75 center">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


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


<?php get_footer();?>