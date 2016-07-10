<?php
$hero_title = get_sub_field('hero_simple_title');
$hero_subtitle = get_sub_field('hero_simple_subtitle', false, false);
$hero_image = get_sub_field('hero_simple_background_image');
$hero_ancor = get_sub_field('hero_simple_button_ancor');
$position = get_sub_field('position');
?>

<!--HERO_SIMPLE-->

<section class="hero-section hero-layout-simple hero-fullscreen section section-dark">

  <div class="section-background">
    <div class="section-background-image parallax" data-stellar-ratio="0.4">
      <?php 
        //$image = get_field('artist_feature_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $hero_image ) {
          echo wp_get_attachment_image( $hero_image, $size );
        }
      ?>
    </div>
  </div>

  <div class="container">
    <div class="hero-content">
      <div class="hero-content-inner">
        <div class="row">
          <div class="hero-col col-<?php echo $position ?>">
            <div class="hero-heading" data-animation="fadeIn">

              <h1 class="hero-title"><?php echo $hero_title; ?></h1>
              <p class="hero-tagline"><?php echo $hero_subtitle; ?></p>
            </div>
          
            
            <?php if( have_rows('hero_simple_button') ): ?>
              <p class="hero-buttons">
              <?php while ( have_rows('hero_simple_button') ) : the_row(); ?>
                <?php $hero_simple_button_title = get_sub_field('hero_simple_button_title'); ?>
                <?php $hero_simple_button_link = get_sub_field('hero_simple_button_link'); ?>
                <?php $hero_simple_button_color = get_sub_field('hero_simple_button_color'); ?>
                <?php
                if ($hero_simple_button_color == 'default') { 
                  $btn_class = "btn-default";

                } elseif ($hero_simple_button_color == 'primary'){ 
                  $btn_class = "btn-primary";
                
                } elseif ($hero_simple_button_color == 'success'){ 
                  $btn_class = "btn-success";
                
                } elseif ($hero_simple_button_color == 'warning'){ 
                  $btn_class = "btn-warning";
                }
                ?>

                <a href="<?php echo $hero_simple_button_link; ?>" class="btn btn-lg <?php echo $btn_class; ?>"><?php echo $hero_simple_button_title; ?></a>
                
              <?php endwhile; ?>
              </p>
            <?php endif; ?>
            

          </div>
        </div>
      </div>
    </div>
  </div>

</section>