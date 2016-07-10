<!--HERO_SLIDESHOW-->
<style>
  .owl-stage-outer {
    height: 695px;
  }
</style>

<!-- section-slider -->
<section id="section-slider" class="hero-section hero-layout-simple hero-fullscreen hero-slider section section-dark">
  <ul class="section-slider owl-carousel parallax">
    <?php if( have_rows('hero_slideshow_background_image') ): ?>
      <?php while ( have_rows('hero_slideshow_background_image') ) : the_row(); ?>  
<?php 
$hero_slideshow_position = get_sub_field('hero_slideshow_position');
$hero_slideshow_background_images = get_sub_field('hero_slideshow_background_images');
$hero_slideshow_title = get_sub_field('hero_slideshow_title');
$hero_slideshow_subtitle = get_sub_field('hero_slideshow_subtitle');
$hero_slideshow_button_title = get_sub_field('hero_slideshow_button_title');
$hero_slideshow_button_link = get_sub_field('hero_slideshow_button_link');

            if ($hero_slideshow_position == 'Right') { 
              $text_align = "col-md-6 col-md-offset-6 text-right";
            } elseif ($hero_slideshow_position == 'Left') { 
              $text_align = "col-md-6";
            } else { 
              $text_align = "col-md-10 col-md-offset-1 text-center";
            }
        ?>
          <li class="section-slide">
            <div class="section-background">
              <div class="section-background-image parallax" data-stellar-ratio="0.4">
                <img src="<?php echo $hero_slideshow_background_images; ?>" alt="" style="opacity: 0.3;">
              </div>
            </div>
            <div class="container">
              <div class="hero-content parallax">
                <div class="hero-content-inner">
                  <div class="row">
                    <div class="<?php echo $text_align; ?>">
                      <div class="hero-heading" data-animation="fadeIn">
                        <h1 class="hero-subtitle"><?php echo $hero_slideshow_title; ?></h1>
                        <p class="hero-tagline"><?php echo $hero_slideshow_subtitle; ?></p>
                      </div>
                      <p class="hero-buttons">
                        <a href="<?php echo $hero_slideshow_button_link; ?>" class="btn btn-lg btn-primary"><?php echo $hero_slideshow_button_title; ?></a>
                      </p>
                    </div>
                  </div>                
                </div>
              </div>
            </div>
          </li>

      <?php endwhile; ?>
    <?php endif; ?>             
  </ul>

</section>

          <script type="text/javascript">
            jQuery(document).ready(function(){
              jQuery('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                autoplayHoverPause: true,
                autoplay:true,           
                nav: true,
                navigationText: [
                "1111111111111",
                "22222222222222222"
                ],            
                responsive:{
                  0:{
                    items:1
                  },
                  600:{
                    items:1
                  },
                  1000:{
                    items:1
                  }
                }
              });
            });
          </script>