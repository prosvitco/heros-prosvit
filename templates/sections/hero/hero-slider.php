<!-- section-slider -->

<section id="section-slider" class="hero-section hero-layout-simple hero-fullscreen hero-slider section section-dark">
    <ul class="section-slider owl-carousel owl-theme">
        <?php if( have_rows('slide') ): ?>
          <?php while ( have_rows('slide') ) : the_row(); ?>  
            <?php 
            //$hero_slideshow_position = get_sub_field('hero_slideshow_position');
            $image = get_sub_field('image');
            $hero_slideshow_title = get_sub_field('heading');
            $hero_slideshow_subtitle = get_sub_field('sub_heading');
            $display_buttons = get_sub_field('button');
            //$hero_slideshow_button_title = get_sub_field('buttons');
            //$hero_slideshow_button_link = get_sub_field('hero_slideshow_button_link');

            /*
            if ($hero_slideshow_position == 'Right') { 
              $text_align = "col-md-6 col-md-offset-6 text-right";
            } elseif ($hero_slideshow_position == 'Left') { 
              $text_align = "col-md-6";
            } else { 
              $text_align = "col-md-10 col-md-offset-1 text-center";
            }
            */
            ?>
          <li class="section-slide" style="position: relative">
            <div class="section-background">
              <div class="section-background-image">
                <?php 
                  if( $image ) {
                    echo wp_get_attachment_image( $image, 'full' );
                  }
                ?>
              </div>
            </div>

              <div class="container">
                <div class="hero-content">
                  <div class="hero-content-inner">
                    <div class="row">
                      <div class="col-xs-10 col-xs-offset-1">
                        <div class="hero-heading" data-animation="fadeIn">
                          <h1 class="hero-subtitle"><?php echo $hero_slideshow_title; ?></h1>
                          <p class="hero-tagline"><?php echo $hero_slideshow_subtitle; ?></p>
                        </div>

                        <?php if( have_rows('buttons') ): ?>
                          <p class="hero-buttons">
                          <?php while ( have_rows('buttons') ) : the_row(); ?>
                            <?php $hero_simple_button_title = get_sub_field('button_text'); ?>
                            <?php $hero_simple_button_link = get_sub_field('button_link'); ?>
                            <?php $hero_simple_button_color = get_sub_field('button_color'); ?>
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

          </li>

      <?php endwhile; ?>
    <?php endif; ?>             
  </ul>

</section>