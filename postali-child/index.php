<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '8',
    'post_status' => 'publish',
    'paged' => $paged,
    'order' => 'DESC',
);
$query = new WP_Query($args);
get_header(); ?>

<section class="interior-hero" style="background-image:url(/wp-content/uploads/2020/04/blog-landing-hero-img-1.jpg)">
    <div class="container">
        <div class="main-content-block">
        <p id="breadcrumbs"><span><span><a href="/">Home</a> / <span class="breadcrumb_last" aria-current="page">Blog</span></span></span></p>
        <h1>Legal Blog</h1>
        </div>
    </div>
</section>


<section class="blog-roll">
<div class="container blog-posts">
	<h2>Most Recent</h2>
	<div class="spacer-30"></div>
	<div class="columns">
			<?php $first = true; ?>
				<?php while( $query->have_posts() ) : $query->the_post(); ?>
					<article>
						<div class="blog-feed-article-content">
							<div class="post_image">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blog-container">
								<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
								<div class="featured-wrap" style="background-image: url('<?php echo esc_attr( $background_img[0] ); ?>' )"></div>
								<div class="blog-content">
									<p class="smaller-body yellow"><?php
                                        $terms = get_the_terms( $post->ID , 'category' );
                                        foreach ( $terms as $term ) {
                                        echo '<span>' . $term->name . ' </span>';
										} ?>
									</p>
									<h3><?php the_title(); ?></h3>
									<div class="stripe"><?php the_excerpt(); ?></div>
									<span class="button">Read the Article</span>
								</div>
							</a>
							</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>

	</div>

</div><!-- #content -->
</section>

<?php if ($query->max_num_pages > 1) : // custom pagination   ?>
<section id="pagination">

        <?php
        $orig_query = $wp_query; // fix for pagination to work
        $wp_query = $query;
        ?>
        <?php
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('<span class="icon-drw-chevron-left"></span>', 'textdomain'),
            'next_text' => __('<span class="icon-drw-chevron-right"></span>', 'textdomain'),
        ));
        ?>
    <?php
    $wp_query = $orig_query; // fix for pagination to work
    ?>

</section>
<?php endif; ?>


<?php get_footer(); ?>
