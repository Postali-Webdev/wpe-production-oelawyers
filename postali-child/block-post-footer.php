<?php
/* Hardcoding what blogs should appear as recommended for specified categories */
function get_related_posts($id) {

	if ( has_category("Truck Accidents", $post->ID) ) {
		$postArgs = array (
			'post_type' => 'post',
			'post__in' => array(1081, ($id === 1025) ? 1089 : 1025, ($id === 982) ? 1089 : 982)
		);
	} else if ( has_category("Bicycle Accident", $post->ID) ) {
		$postArgs = array (
			'post_type' => 'post',
			'post__in' => array(($id === 971) ? 1081 : 971 , ($id === 961) ? 1081 : 961 ,($id === 959) ? 1081 : 959)
		);
	} else if ( has_category("Criminal Defense", $post->ID) ) {
		$postArgs = array (
			'post_type' => 'post',
			'post__in' => array(($id === 308) ? 1089 : 308, ($id === 986) ? 1089 : 986, ($id === 990) ? 1089 : 990)
		);
	} else if ( has_category( "Personal Injury", $post->ID ) ) {
		$postArgs = array (
			'post_type' => 'post',
			'post__in' => array(($id === 311) ? 1067 : 311, ($id === 1074) ? 1067 : 1074, ($id === 304) ? 1067 : 304)
		);
	} else 	if ( has_category("Car Accidents", $post->ID) ) {

		$postArgs = array (
			'post_type' => 'post',
			'post__in' => array(($id === 1081) ? 956 : 1081, ($id === 1089) ? 956 : 1089, ($id === 1183) ? 956 : 1183 )
		);
	} else {
		$postArgs = array (
			'post_type' => 'post',
			'post__in' => array(1081, 1074, 1183)
		);
	}
	return $postArgs;
}
$more_query = new WP_Query( get_related_posts($post->ID) );
?>


<section class="blog-roll">
<div class="container blog-posts">
	<h2>Recommended Posts</h2>
	<div class="spacer-60"></div>
	<div class="columns">
			<?php $first = true; ?>
				<?php while( $more_query->have_posts() ) : $more_query->the_post(); ?>
					<article class="rec-post-item">
						<div class="blog-feed-article-content">
							<div class="post_image">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blog-container">
								<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
								<div class="featured-wrap" style="background-image: url('<?php echo esc_attr( $background_img[0] ); ?>' )"></div>
								<div class="blog-content">
									<p class="smaller-body yellow"><?php
                                        $terms = get_the_terms( $post->ID , 'category' );
                                        foreach ( $terms as $term ) {
                                        echo $term->name . " ";
										} ?>
									</p>
									<h3><?php the_title(); ?></h3>
									<span class="button">Read the Article</span>
								</div>
							</a>
							</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>

	</div>

</div><!-- #content -->
</section>
