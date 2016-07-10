<?php 
  $hero_features_background_image = get_sub_field('hero_features_background_image');
  $hero_features_title = get_sub_field('hero_features_title');
  $hero_features_subtitle = get_sub_field('hero_features_subtitle');
  $hero_features_text = get_sub_field('hero_features_text');
  $hero_features_form = get_sub_field('hero_features_form');
?>  
<!--HERO_FEATURES_AND_FORM-->
<section id="hero" class="hero-section hero-layout-classic hero-layout-features-and-form section section-dark">
<div class="section-background">
    <div class="section-background-image parallax" data-stellar-ratio="0.4">
      <img src="<?php echo $hero_features_background_image; ?>" alt="" style="opacity: 0.2;">
    </div>
  </div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-content-inner">
        <div class="hero-heading text-center row" data-animation="fadeIn">
          <div class="col-md-10 col-md-offset-1">

            <h1 class="hero-title"><?php echo $hero_features_title; ?></h1>
            <p class="hero-tagline"><?php echo $hero_features_subtitle; ?></p>

          </div>
        </div>
        <div class="hero-features row">
          <div class="hero-features-left col-md-7">

            <p class="lead"><?php echo $hero_features_text; ?></p>
            <ul class="icon-list">
              <?php if( have_rows('hero_features_list') ): $i=0;?>
                <?php while ( have_rows('hero_features_list') ) : the_row(); ?>
                  <?php $i++;
                  $hero_features_list_title = get_sub_field('hero_features_list_title');
                  $hero_features_list_text = get_sub_field('hero_features_list_text');
                  ?>         
                  <li>
                   <h4 class="icon-list-title"><?php echo $hero_features_list_title; ?></h4>
                   <p><?php echo $hero_features_list_text; ?></p>
                 </li>
               <?php endwhile; ?>
             <?php endif; ?> 
           </ul>
         </div>
         <div class="hero-features-right col-md-5" data-animation="fadeIn">
          <!-- FORM -->

          <?php echo do_shortcode('[contact-form-7 id="'.$hero_features_form[0].'" title=""]');?>

        </div>
      </div>
    </div>
  </div>
</div>
</section>








<!--
<section id="hero" class="hero-section hero-layout-classic hero-layout-features-and-form section section-dark">

  <div class="section-background">

    <div class="section-background-image parallax" data-stellar-ratio="0.4">
      <img src="http://188.226.237.233/shared/trco/wp-content/uploads/2016/03/hero-bg-features-and-form.jpg" alt="" style="opacity: 0.2;">
    </div>

  </div>

  <div class="container">

    <div class="hero-content">
      <div class="hero-content-inner">

        <div class="hero-heading text-center row" data-animation="fadeIn">
          <div class="col-md-10 col-md-offset-1">

            <h1 class="hero-title">All in One Template</h1>

            <p class="hero-tagline">A robust Landing Page Template which solves all your landing page needs</p>

          </div>
        </div>

        <div class="hero-features row">

          <div class="hero-features-left col-md-7">

            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus.</p>
            <ul class="icon-list">
              <li>
                <span class="icon-list-icon fa fa-hand-o-up" data-animation="bounceIn"></span>
                <h4 class="icon-list-title">Click Through</h4>
                <p>Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros. Duis ex metus, facilisis nec porta non, accumsan vel turpis.</p>
              </li>
              <li>
                <span class="icon-list-icon fa fa-heart-o" data-animation="bounceIn"></span>
                <h4 class="icon-list-title">Lead Generation</h4>
                <p>Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros. Duis ex metus, facilisis nec porta non, accumsan vel turpis.</p>
              </li>
              <li>
                <span class="icon-list-icon fa fa-lightbulb-o" data-animation="bounceIn"></span>
                <h4 class="icon-list-title">Other Purposes</h4>
                <p>Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros. Duis ex metus, facilisis nec porta non, accumsan vel turpis.</p>
              </li>
            </ul>

          </div>

          <div class="hero-features-right col-md-5" data-animation="fadeIn">


            <form name="hero" action="" method="post" id="form" class="form" role="form">

              <h4 class="form-heading">Get your Awesome Landing Page Now!</h4>

              <div class="form-validation alert"></div>

              <div class="form-group">
                <label for="form-name">Name</label>
                <input type="text" name="name" id="form-name" class="form-control" placeholder="Your Full Name" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="form-email">Email Address</label>
                <input type="email" name="email" id="form-email" class="form-control" placeholder="Your Valid Email Address" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="form-location">Your Location</label>
                <select name="location" id="form-location" class="form-control" placeholder="Your Location" autocomplete="off">
                  <option value="Alabama">Alabama</option>
                  <option value="Alaska">Alaska</option>
                  <option value="Arizona">Arizona</option>
                  <option value="Arkansas">Arkansas</option>
                  <option value="California">California</option>
                  <option value="Colorado">Colorado</option>
                  <option value="Connecticut">Connecticut</option>
                  <option value="Delaware">Delaware</option>
                  <option value="Florida">Florida</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Hawaii">Hawaii</option>
                  <option value="Idaho">Idaho</option>
                  <option value="Illinois">Illinois</option>
                  <option value="Indiana">Indiana</option>
                  <option value="Iowa">Iowa</option>
                  <option value="Kansas">Kansas</option>
                  <option value="Kentucky">Kentucky</option>
                  <option value="Louisiana">Louisiana</option>
                  <option value="Maine">Maine</option>
                  <option value="Maryland">Maryland</option>
                  <option value="Massachusetts">Massachusetts</option>
                  <option value="Michigan">Michigan</option>
                  <option value="Minnesota">Minnesota</option>
                  <option value="Mississippi">Mississippi</option>
                  <option value="Missouri">Missouri</option>
                  <option value="Montana">Montana</option>
                  <option value="Nebraska">Nebraska</option>
                  <option value="Nevada Carson">Nevada  Carson</option>
                  <option value="New Hampshire">New Hampshire</option>
                  <option value="New Jersey">New Jersey</option>
                  <option value="New Mexico">New Mexico</option>
                  <option value="New York">New York</option>
                  <option value="North Carolina">North Carolina</option>
                  <option value="North Dakota">North Dakota</option>
                  <option value="Ohio">Ohio</option>
                  <option value="Oklahoma">Oklahoma</option>
                  <option value="Oregon">Oregon</option>
                  <option value="Pennsylvania">Pennsylvania</option>
                  <option value="Rhode Island">Rhode Island</option>
                  <option value="South Carolina">South Carolina</option>
                  <option value="South Dakota">South Dakota</option>
                  <option value="Tennessee">Tennessee</option>
                  <option value="Texas">Texas</option>
                  <option value="Utah">Utah</option>
                  <option value="Vermont">Vermont</option>
                  <option value="Virginia">Virginia</option>
                  <option value="Washington">Washington</option>
                  <option value="West Virginia">West Virginia</option>
                  <option value="Wisconsin">Wisconsin</option>
                  <option value="Wyoming">Wyoming</option>
                </select>
              </div>

              <div class="form-group form-group-submit">
                <button class="btn btn-primary btn-lg btn-block" data-loading-text="Action Button">Action Button</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </div>

  </div>

</section>-->