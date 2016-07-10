<!-- hero-layout-subscribe  -->
<?php 
  $hero_layout_subscribe_background_image = get_sub_field('hero_layout_subscribe_background_image');
  $hero_layout_subscribe_title = get_sub_field('hero_layout_subscribe_title');
  $hero_layout_subscribe_subtitle = get_sub_field('hero_layout_subscribe_subtitle');
  $hero_layout_subscribe_video = get_sub_field('hero_layout_subscribe_video');
?> 
<section id="hero-layout-subscribe" class="hero-section hero-layout-simple hero-layout-video-and-subscription-form section section-dark">
  <div class="section-background">
    <!-- IMAGE BACKGROUND -->
    <div class="section-background-image parallax" data-stellar-ratio="0.4">
      <img src="<?php echo $hero_layout_subscribe_background_image; ?>" alt="" style="opacity: 0.2;">
    </div>
  </div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-content-inner">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="hero-heading text-center" data-animation="fadeIn">
              <h1 class="hero-title"><?php echo $hero_layout_subscribe_title; ?></h1>
              <p class="hero-tagline"><?php echo $hero_layout_subscribe_subtitle; ?></p>
            </div>
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="video-embed">
                      <!-- VIDEO EMBED FROM VIMEO -->
                      <iframe class="video-async" data-source="vimeo" data-video="115134273" data-color="f3ae73" allowfullscreen src="https://www.youtube.com/embed/<?php echo $hero_layout_subscribe_video; ?>"></iframe>
                      <!-- VIDEO EMBED FROM YOUTUBE -->
                      <!-- <iframe class="video-async" data-source="youtube" data-video="7UAy8E3e9f8" allowfullscreen></iframe> -->
                    </div>
                  </div>
                </div>
                <!-- SUBSCRIPTION FORM -->
                <?php echo do_shortcode('[contact-form-7 id="299" title="subscribe"]');?>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>