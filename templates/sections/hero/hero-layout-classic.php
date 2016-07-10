<?php 
  $hero_layout_classic_background_image = get_sub_field('hero_layout_classic_background_image');
  $hero_layout_classic_title = get_sub_field('hero_layout_classic_title');
  $hero_layout_classic_subtitle = get_sub_field('hero_layout_classic_subtitle');
  $hero_layout_classic_text = get_sub_field('hero_layout_classic_text');
  $hero_layout_classic_video = get_sub_field('hero_layout_classic_video');
?>  
<!-- hero-layout-classic -->
<section id="hero-layout-classic" class="hero-section hero-layout-classic hero-layout-video-and-features-cta section section-dark">
  <div class="section-background">
    <!-- IMAGE BACKGROUND -->
    <div class="section-background-image parallax" data-stellar-ratio="0.4">
      <img src="<?php echo $hero_layout_classic_background_image; ?>" alt="" style="opacity: 0.2;">
    </div>
  </div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-content-inner">
        <div class="hero-heading text-center row" data-animation="fadeIn">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="hero-title"><?php echo $hero_layout_classic_title; ?></h1>
            <p class="hero-tagline"><?php echo $hero_layout_classic_subtitle; ?></p>
          </div>
        </div>
        <div class="hero-features row">
          <div class="hero-features-left col-md-7">
            <div class="video-embed">
              <!-- VIDEO EMBED FROM VIMEO -->
              <iframe class="video-async" data-source="vimeo" data-video="115134273" data-color="f3ae73" allowfullscreen src="https://www.youtube.com/embed/<?php echo $hero_layout_classic_video; ?>" frameborder="0" allowfullscreen></iframe>
              <!-- VIDEO EMBED FROM YOUTUBE -->
              <!-- <iframe class="video-async" data-source="youtube" data-video="7UAy8E3e9f8" allowfullscreen></iframe> -->
            </div>
            <p class="lead"><?php echo $hero_layout_classic_text; ?></p>
          </div>
          <div class="hero-features-right col-md-5" data-animation="fadeIn">
            <ul class="icon-list">
              <?php if( have_rows('hero_layout_classic_list') ): $i=0;?>
                <?php while ( have_rows('hero_layout_classic_list') ) : the_row(); ?>
                  <?php $i++;
                  $hero_layout_classic_list_title = get_sub_field('hero_layout_classic_list_title');
                  $hero_layout_classic_list_text = get_sub_field('hero_layout_classic_list_text');
                  ?>         
                  <li>
                   <?php if ($i==1) { ?>
                   <span class="icon-list-icon fa fa-hand-o-up" data-animation="bounceIn"></span>
                   <?php } ?>
                   <?php if ($i==2) { ?>
                   <span class="icon-list-icon fa fa-heart-o" data-animation="bounceIn"></span>
                   <?php } ?> 
                   <?php if ($i==3) { ?>
                   <span class="icon-list-icon fa fa-lightbulb-o" data-animation="bounceIn"></span>
                   <?php } ?>                    
                   <h4 class="icon-list-title"><?php echo $hero_layout_classic_list_title; ?></h4>
                   <p><?php echo $hero_layout_classic_list_text; ?></p>
                 </li>
               <?php endwhile; ?>
             <?php endif; ?> 
           </ul>
           <div class="hero-buttons">
            <a href="#" class="btn btn-lg btn-primary">Your Big Action Button</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>