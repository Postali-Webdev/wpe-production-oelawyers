<?php
/**
 * Awards Block
 * @package Postali Parent
 * @author Postali LLC
 */
?>
<?php if( have_rows('awards', 'options') ): ?>

    <div class="awards-container">
        <!--spanish page--> <?php if ( is_page(705) ) : ?>
            <span class="awards-title">Nuestros Premios y Acreditaciones</span>
        <!--english page--><?php elseif ( !is_page(705) ): ?>	
            <span class="awards-title">Our Awards & Accreditations</span>
        <?php endif; ?>
        <div id="awards-slider">

            <?php while ( have_rows('awards', 'options') ) : the_row(); ?>   

                <?php 
                $image = get_sub_field('award_image');
                $alt = get_sub_field('award_caption');
                if( !empty( $image ) ): ?>
                <div class="slide" tabindex="-1">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" tabindex="-1" />
                </div>
                <?php endif; ?>
        
            <?php endwhile; ?>

        </div>
    </div>

<?php endif; ?>