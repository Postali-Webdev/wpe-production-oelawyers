<?php
/**
 * Page - Sitemap
 * Template Name: Sitemap
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

<section id="sitemap" class="gray">
	<?php if (have_posts()) : 
		while (have_posts()) : the_post(); ?>
            <div class="container filled">
				<div class="columns">
                <div class="column-50">
					<h2>Pages</h2> 
					<div class="spacer-30"></div>
					<ul>
						<?php wp_list_pages("title_li=" ); ?>
					</ul> 
				</div>
				<div class="column-50">
					<h2>Blog Posts</h2> 
					<div class="spacer-30"></div>
					<ul>
						<?php wp_get_archives('type=postbypost'); ?>
					</ul>
				</div>
			</div>
	    </div>
	<?php endwhile; ?>
	<?php endif; ?>
</section>
	
<?php get_footer(); ?>