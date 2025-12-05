<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */
$featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$blogDefault = get_field('default_blog_image', 'options');
?>

<?php
get_header();?>

<section class="interior-hero">
    <div class="container">
        <div class="columns">
            <div class="main-content-block">
            <p id="breadcrumbs"><span><span><a href="/">Home</a> / <span class="breadcrumb_last" aria-current="page">Legal Blog</span></span></span></p>
                <div class="blog-image">
                    <img src="<?php echo $featImg[0]; ?>" class="blog-featured"/>
                </div>
            </div>
            <div class="attorney-details-block">
                <span class="small yellow"><?php the_category(); ?></span>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>


<section class="article-content">
    <div class="container">
        <div class="author-box">
            <div class="author-img">
                <?php if (get_field('blog_author') == 'James Oronoz') { ?>
                    <div class="author-img_circle" style="background-image: url('/wp-content/uploads/2020/04/about-profile-oronoz-img.jpg');"></div>
                <?php } elseif (get_field('blog_author') == 'Thomas Ericsson') { ?>
                    <div class="author-img_circle" style="background-image: url('/wp-content/uploads/2020/04/about-profile-ericsson-img.jpg');"></div>
                <?php } else { ?>
                    <div style="background-image: url('/wp-content/uploads/2020/07/featured-logo.png');"></div>
                <?php } ?>
            </div>
            <?php if (get_field('blog_author') == 'James Oronoz') { ?>
                    <div class="author-name">Author:<br><div class="underlined">James Oronoz</div></div>
                <?php } elseif (get_field('blog_author') == 'Thomas Ericsson') { ?>
                    <div class="author-name">Author:<br><div class="underlined">Thomas Ericsson</div></div>
                <?php } else { ?>
                    <div class="author-name">Author:<br><div class="underlined">Oronoz & Ericsson, LLC</div></div>
                <?php } ?>
        </div>           
        <?php the_content(); ?>                
    </div>
</section>


<?php get_template_part('block', 'post-footer');?>


<?php get_footer(); ?>