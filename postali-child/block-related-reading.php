<?php 

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order' => 'DESC'
];
$the_query = new WP_Query( $args );
$count = 0;
?>

<section class="block-related-reading">
    <div class="left-bar">
        <p>Related Reading</p>
    </div>
    <div class="right-bar">
        <span>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); $count++; ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> <?php if ( $count === 1 ) : echo '<span> and </span>'; endif; ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </span>
    </div>
</section>