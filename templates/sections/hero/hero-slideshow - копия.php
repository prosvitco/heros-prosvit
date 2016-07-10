<?php 
$hero_layout_classic_title = get_sub_field('hero_layout_classic_title');
$hero_slideshow_title = get_sub_field('hero_slideshow_title');
$hero_slideshow_subtitle = get_sub_field('hero_slideshow_subtitle');
$hero_slideshow_button_ancor = get_sub_field('hero_slideshow_button_ancor');
?>  
<!--HERO_SLIDESHOW-->






            <section id="hero-slideshow" class="hero-section hero-layout-simple hero-fullscreen section section-dark">
              <div class="section-background">
                <div class="section-background-slideshow owl-carousel-hero-slideshow owl-carousel parallax">
                  <?php if( have_rows('hero_slideshow_background_image') ): ?>
                    <?php while ( have_rows('hero_slideshow_background_image') ) : the_row(); ?>   
                     <?php $hero_slideshow_background_images = get_sub_field('hero_slideshow_background_images'); ?>
                     <img src="<?php echo $hero_slideshow_background_images; ?>" alt="" style="position:relative;opacity: 0.25;">
                   <?php endwhile; ?>
                 <?php endif; ?>      
               </div>
             </div>
             <div class="container">
              <div class="hero-content">
                <div class="hero-content-inner">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="hero-heading text-center" data-animation="fadeIn">
                        <h1 class="hero-title"><?php echo $hero_slideshow_title; ?></h1>
                        <p class="hero-tagline"><?php echo $hero_slideshow_subtitle; ?></p>
                      </div>
                      <p class="hero-buttons text-center">
                        <?php if( have_rows('hero_slideshow_button') ): ?>
                          <?php while ( have_rows('hero_slideshow_button') ) : the_row(); ?>
                            <?php $hero_slideshow_button_title = get_sub_field('hero_slideshow_button_title'); ?>
                            <?php $hero_slideshow_button_link = get_sub_field('hero_slideshow_button_link'); ?>
                            <?php $hero_slideshow_button_color = get_sub_field('hero_slideshow_button_color'); ?>
                            <?php
                            if ($hero_slideshow_button_color == 'default') { 
                              $btn_class = "btn-default";
                            } else { 
                              $btn_class = "btn-primary";
                            }
                            ?>
                            <a href="#<?php echo $hero_slideshow_button_link; ?>" class="btn btn-lg <?php echo $btn_class; ?>"><?php echo $hero_slideshow_button_title; ?></a>

                          <?php endwhile; ?>
                        <?php endif; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a href="#<?php echo $hero_slideshow_button_ancor; ?>" class="hero-start-link anchor-link"><span class="fa fa-angle-double-down"></span></a>
          </section>

          <script type="text/javascript">
            jQuery(document).ready(function(){
              jQuery('.owl-carousel-hero-slideshow').owlCarousel({
                items: 1,
                loop:true,
                margin:0,
                autoplayHoverPause: true,
                dotsEach:true,
                autoplay:true,
                nav: true,
                navigationText: [
                "<i class='icon-chevron-left icon-white'><</i>",
                "<i class='icon-chevron-right icon-white'>></i>"
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


<!--HERO_SLIDER-->


<section id="hero" class="hero-section hero-layout-simple hero-fullscreen hero-slider section section-dark">

  <ul class="section-slider parallax">

    <li class="section-slide">

      <div class="section-background">

        <div class="section-background-image parallax" data-stellar-ratio="0.4">
          <img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/hero-bg-slider-1.jpg" alt="" style="opacity: 0.3;">
        </div>

      </div>

      <div class="container">

        <div class="hero-content parallax">
          <div class="hero-content-inner">

            <div class="row">
              <div class="col-md-6">

                <div class="hero-heading" data-animation="fadeIn">

                  <h1 class="hero-subtitle">Hi, Welcome to Drew</h1>

                  <p class="hero-tagline">A robust Landing Page Template which solves all your landing page needs, fit for any business / marketing landing page.</p>

                </div>

                <p class="hero-buttons">
                  <a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
                </p>

              </div>
            </div>

          </div>
        </div>

      </div>

    </li>

    <li class="section-slide">

      <div class="section-background">

        <div class="section-background-image parallax" data-stellar-ratio="0.4">
          <img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/hero-bg-slider-2.jpg" alt="" style="opacity: 0.3;">
        </div>

      </div>

      <div class="container">

        <div class="hero-content">
          <div class="hero-content-inner">

            <div class="row">
              <div class="col-md-6 col-md-offset-6">

                <div class="hero-heading" data-animation="fadeIn">

                  <h1 class="hero-subtitle">High Quality Design</h1>

                  <p class="hero-tagline"><strong>DREW</strong> is developed with both design and high convertion in mind, making it perfectly fit any landing page purpose.</p>

                </div>

                <p class="hero-buttons">
                  <a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
                </p>

              </div>
            </div>

          </div>
        </div>

      </div>

    </li>

    <li class="section-slide">

      <div class="section-background">

        <div class="section-background-video section-background-dot-overlay parallax" data-stellar-ratio="0.4">
          <video preload="auto" autoplay loop muted poster="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/video-fallback-bg.jpg" style="opacity: 0.3;">
            <source type="video/mp4" src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/video-bg.mp4">
              <source type="video/ogg" src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/video-bg.ogv">
                <source type="video/webm" src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/video-bg.webm">
                </video>
              </div>

            </div>

            <div class="container">

              <div class="hero-content">
                <div class="hero-content-inner">

                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                      <div class="hero-heading text-center" data-animation="fadeIn">

                        <h1 class="hero-subtitle">Easy as having a cup of coffee</h1>

                        <p class="hero-tagline">Provided with a complete documentation and modular CSS classes, <strong>DREW</strong> is ready to rocks your new landing page in minutes!</p>

                      </div>

                      <p class="hero-buttons text-center">
                        <a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
                      </p>

                    </div>
                  </div>

                </div>
              </div>

            </div>

          </li>

        </ul>

      </section>     






     