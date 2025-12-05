<?php
/**
 * Testimonials Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

<section class="interior-hero" style="background-image:url(/wp-content/uploads/2020/04/reviews-hero-img.jpg)">
    <div class="container">
        <div class="main-content-block">
        <p id="breadcrumbs"><span><span><a href="/">Home</a> / <span class="breadcrumb_last" aria-current="page">Reviews</span></span></span></p>
        <h1>Reviews &<br>Testimonials</h1>
        </div>
    </div>
</section>


<section class="archive-results">
    <div class="container">
        <div class="columns">
            
                <?php while ( have_posts() ) : the_post(); ?>
                    <span class="column-50">
                        <h2><?php the_field('testimonial_author'); ?></h2>
                        <div class="spacer-15"></div>
                        <div class="rating"><span class="icon-WL_star"></span><span class="icon-WL_star"></span><span class="icon-WL_star"></span><span class="icon-WL_star"></span><span class="icon-WL_star"></span></div>
                        <div class="spacer-15"></div>
                        <div class="stripe"><?php the_content(); ?></div>
                    </span>
                <?php endwhile; ?>
        </div>
    </div>
</section>


<section id="pagination">
    <?php the_posts_pagination(); ?>
</section>

<?php get_footer();
