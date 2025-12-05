<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

<section class="footer-logo">
    <img src="/wp-content/uploads/2025/10/oe-header-logo.svg"" alt="Oronoz & Ericsson logo">
</section>

<!--spanish page--><?php if ( is_page(705) ) : ?>
    <section class="footer-contact">
        <div class="container">
            <div class="columns">
                <div class="column-contact"> 
                    <a class="footer-phone" href="tel:<?php the_field('global_phone','options'); ?>" title="Call Oronoz & Ericsson Today"><?php the_field('global_phone','options'); ?></a>
                    <div class="spacer-break"></div>
                        <div class="column-33"><p><a href="https://www.google.com/maps/place/Oronoz+%26+Ericsson+Injury+Lawyers/@36.1604448,-115.3181526,15z/data=!4m5!3m4!1s0x0:0x6b2060023ac65a80!8m2!3d36.1604448!4d-115.3181526" title="Google Maps Address" target=_blank><?php the_field('global_address','options'); ?></a></p></div>
                        <div class="column-33"><p><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Oronoz & Ericsson Today"><?php the_field('global_email','options'); ?></a></p></div>
                        <div class="column-33">&nbsp;</div>
                    <div class="spacer-15"></div>
                    <div class="responsive-iframe">
                        <iframe title="Location map" src="<?php the_field('map_link','options'); ?>" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        
                    </div>
                    </div>
                <div class="column-form"> 
                    <div class="blue-fill">
                        <h3 class="centered">Conactáctenos</h3>
                        <?php echo do_shortcode("[gravityform id='2' title='false']"); ?>
                    </div>
                </div>
                <div class="column-contact_2">
                    <div class="column-full">
                        <p class="stripe">Descargo de responsabilidad: La información en este sitio web es solo para fines de información general. Nada en este sitio debe tomarse como asesoramiento legal para ningún caso o situación individual. Esta información no está destinada a crear, y la recepción o visualización no constituye una relación abogado-cliente.</p> 
                    </div>
                    <div class="column-full">
                        <?php if ( is_page(705) ) { ?>
                            <?php
                                $args = array(
                                    'container' => false,
                                    'theme_location' => 'footer-nav-spanish'
                                );
                                wp_nav_menu( $args );
                            ?>	
                        <?php } else { ?>
                            <?php
                                $args = array(
                                    'container' => false,
                                    'theme_location' => 'footer-nav'
                                );
                                wp_nav_menu( $args );
                            ?>	
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>





<!--english page--><?php elseif ( !is_page(705) ): ?>	
    <section class="footer-contact">
        <div class="container">
            <div class="columns">
                <div class="column-contact"> 
                    <a class="footer-phone" href="tel:<?php the_field('global_phone','options'); ?>" title="Call Oronoz & Ericsson Today"><?php the_field('global_phone','options'); ?></a>
                    <div class="spacer-break"></div>
                        <div class="column-33 col1"><p><a href="https://www.google.com/maps/place/Oronoz+%26+Ericsson+Injury+Lawyers/@36.1604448,-115.3181526,15z/data=!4m5!3m4!1s0x0:0x6b2060023ac65a80!8m2!3d36.1604448!4d-115.3181526" title="Google Maps Address" target=_blank><?php the_field('global_address','options'); ?></a></p></div>
                        <div class="column-33"><p><a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Oronoz & Ericsson Today"><?php the_field('global_email','options'); ?></a></p></div>
                        <div class="column-33">&nbsp;</div>
                    <div class="spacer-15"></div>
                    <div class="responsive-iframe">
                        <iframe title="Location map" src="<?php the_field('map_link','options'); ?>" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>
                <div class="column-form"> 
                    <div class="blue-fill">
                        <h3 class="centered">Contact us</h3>
                        <?php echo do_shortcode("[gravityform id='1' title='false']"); ?>
                    </div>
                </div>
                <div class="column-contact_2">
                    <div class="column-full">
                        <p class="stripe">Disclaimer: The information on this website is for general information purposes only. Nothing on this site should be taken as legal advice for any individual case or situation. This information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.</p> 
                    </div>
                    <div class="column-full">
                        <?php
                            $args = array(
                                'container' => false,
                                'theme_location' => 'footer-nav'
                            );
                            wp_nav_menu( $args );
                        ?>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column-full">
                    <?php if(is_page_template('front-page.php')) { ?>    
                    <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:30px 0 0;"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php endif ?>



</footer>

<!-- Add JSON Schema here -->
    <?php 
    // Single Page Schema
    $single_schema = get_field('single_schema');
    if ( !empty($single_schema) ) :
        echo '<script type="application/ld+json">' . $single_schema . '</script>';
    endif; ?>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.callrail.com/companies/594749677/bead89b9cf1e91af6d76/12/swap.js"></script>
</body>
</html>


