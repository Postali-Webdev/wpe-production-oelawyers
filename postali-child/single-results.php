<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */
$blogDefault = get_field('default_blog_image', 'options');
get_header();?>


<section class="interior-hero">
    <div class="container">
        <div class="columns">
            <div class="main-content-block">
                <p id="breadcrumbs"><span><span><a href="/">Home</a> / <span class="breadcrumb_last" aria-current="page">Legal Blog</span></span></span></p>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>


<section class="article-content">
    <div class="container">          
        <?php the_content(); ?>                
    </div>
</section>


<?php get_template_part('block', 'post-footer');?>


<?php get_footer(); ?>