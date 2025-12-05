<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<?php if (has_post_thumbnail()) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
    echo '<link rel="preload" as="image" href="'.$attachment_image.'">';
    echo '<link rel="preload" as="image" href="'.$attachment_image.'.webp">';
} ?>

<?php if (get_field('background_image')) {
    $bg_image = get_field('background_image');
    echo '<link rel="preload" as="image" href="'.$bg_image.'">';
    echo '<link rel="preload" as="image" href="'.$bg_image.'.webp">';
} ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PF5T5ZC');</script>
<!-- End Google Tag Manager -->

<!-- Schema JSON-LD -->
<?php $review_schema = get_field('review_schema');
if( $review_schema ) : ?>
	<?php echo '<script type="application/ld+json">' . $review_schema . '</script>'; ?>
<?php else : ?>
    <!-- Add JSON Schema here -->
    <?php 
    // Global Schema
    $global_schema = get_field('global_schema', 'options');
    if ( !empty($global_schema) ) :
        echo '<script type="application/ld+json">' . $global_schema . '</script>';
    endif;

    // Single Page Schema
    $single_schema = get_field('single_schema');
    if ( !empty($single_schema) ) :
        echo '<script type="application/ld+json">' . $single_schema . '</script>';
    endif; ?>
<?php endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>

<?php if( is_front_page() ) : ?>
<link rel="preload" as="image" href="/wp-content/uploads/2022/10/homepage-hero-img-mobile.jpg">	
<style type="text/css">
	.homepage-hero {
		background-image:url(<?php echo get_field('background_image') . checkWebpCompatibility(); ?>);	
	}
	@media screen and (max-width: 425px) {
		.homepage-hero {
			background-image:url(<?php echo get_field('mobile_background_image') . checkWebpCompatibility(); ?>);
		}
	}
</style>
<?php endif; ?>

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF5T5ZC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <a class="skip-link" href='#main-content'>Skip to Main Content</a>

	<header>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_menu">
					<?php if ( is_page(705) ) { ?>
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav-spanish'
							);
							wp_nav_menu( $args );
						?>
					<?php } else { ?>
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>
					<?php } ?>

					<!-- Only show this on pages with spanish counterpart- currently just the homepage -->
					<?php if ( is_front_page() || is_page(705)) : ?>
						<?php if ( is_page(705) ) : ?>
							<a href="/" class="en-espanol" title="In English">In English</a>
						<?php elseif ( !is_page(705) ): ?>	
							<a href="/espanol/" class="en-espanol" title="En Español">en español</a>
						<?php endif ?>
					<?php endif; ?>


					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</header>

    <span id="main-content"></span>