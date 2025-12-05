<?php if (  is_tree(328) ) : ?>


  <section class="panel-2 gray">
    <div class="container">
        <div class="columns">
            <div class="column-66 center">
              <!-- this is for car accidents -->
            <h3 class="centered">Car Accident Topics </h3>
              <?php
              $args = array(
                  'container' => false,
                  'theme_location' => 'topics-car-accidents',

                  'menu_class' => 'car-menu-additional-topics'
              );
              wp_nav_menu( $args ); ?>

            </div>
        </div>
    <div>
</section>

<script>
    jQuery( function ( $ ) {
$('#more-topics').click(function() {
		$('#topic-menu-icon').toggleClass('active');
		return false;
	});

	//Toggle mobile menu & search
	$('.select-box').click(function() {
		$('#menu-car-accident-child-pages').slideToggle(200);
	});
	 
	//Close navigation on anchor tap
	$('.additional-nav.active').click(function() {	
		$('#menu-car-accident-child-pages').slideUp(200);
	});	
});
</script>

<?php elseif ( is_tree(447) ) : ?>

  <section class="panel-2 gray">
    <div class="container">
        <div class="columns">
            <div class="column-66 center">
              <!-- this is for car accidents -->
            <h3 class="centered">Additional Topics </h3>
              <div class="select-box">
                  <div class="dropdown-box">Other Truck Accident Topics</div>
                  <div class="menu-toggle-box">
                      <div id="topic-menu-icon" class="additional-nav">
                          <span class="line line-1"></span>
                          <span class="line line-3"></span>
                      </div>
                  </div>
              </div>

              <?php
              $args = array(
                  'container' => false,
                  'theme_location' => 'topics-truck-accidents'
              );
              wp_nav_menu( $args ); ?>

            </div>
        </div>
    <div>
</section>

<script>
    jQuery( function ( $ ) {
$('#more-topics').click(function() {
		$('#topic-menu-icon').toggleClass('active');
		return false;
	});

	//Toggle mobile menu & search
	$('.select-box').click(function() {
		$('#menu-truck-accident-child-pages').slideToggle(200);
	});
	 
	//Close navigation on anchor tap
	$('.additional-nav.active').click(function() {	
		$('#menu-truck-accident-child-pages').slideUp(200);
	});	
});
</script>

<?php elseif ( is_tree(415) ) : ?>

<section class="panel-2 gray">
  <div class="container">
      <div class="columns">
          <div class="column-66 center">
            <!-- this is for car accidents -->
          <h3 class="centered">Criminal Defense Topics </h3>
            <div class="select-box">
                <div class="dropdown-box">Other Criminal Defense Topics</div>
                <div class="menu-toggle-box">
                    <div id="topic-menu-icon" class="additional-nav">
                        <span class="line line-1"></span>
                        <span class="line line-3"></span>
                    </div>
                </div>
            </div>

            <?php
            $args = array(
                'container' => false,
                'theme_location' => 'topics-criminal-defense'
            );
            wp_nav_menu( $args ); ?>

          </div>
      </div>
  <div>
</section>

<script>
  jQuery( function ( $ ) {
    $('#more-topics').click(function() {
		$('#topic-menu-icon').toggleClass('active');
		return false;
});

//Toggle mobile menu & search
$('.select-box').click(function() {
  $('#menu-criminal-defense-child-pages').slideToggle(200);
});
 
//Close navigation on anchor tap
$('.additional-nav.active').click(function() {	
  $('#menu-criminal-defense-child-pages').slideUp(200);
});	
});
</script>

<?php endif; ?> 



