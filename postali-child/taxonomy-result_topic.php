<?php
/**
 * result topic Taxonomy archive
 * @package Postali Parent
 * @author Postali LLC
 */

 get_header(); 

 $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var('taxonomy'));

?>

<section class="interior-hero" style="background-image:url(/wp-content/uploads/2020/04/case-results-hero-img.jpg)">
    <div class="container">
        <div class="main-content-block">
        <p id="breadcrumbs"><span><span><a href="/">Home</a> / <span class="breadcrumb_last" aria-current="page">Results</span></span></span></p>
        <h1><?php echo apply_filters('the_title', $term->name); ?></h1>
        </div>
    </div>
</section>


<section class="archive-results">
    <div class="container">
        <div class="columns">
            <?php while ( have_posts() ) : the_post(); ?>
                    <span class="column-50">
                        <h2><?php the_title(); ?></h2>
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
