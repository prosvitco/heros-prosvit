<!-- hero-layout-hi -->
<?php 
	$hero_layout_hi_background_image = get_sub_field('hero_layout_hi_background_image');
	$hero_layout_hi_title = get_sub_field('hero_layout_hi_title');
	$hero_layout_hi_subtitle = get_sub_field('hero_layout_hi_subtitle');
	$hero_layout_hi_image = get_sub_field('hero_layout_hi_image');
?> 			
<section id="hero-layout-hi" class="hero-section hero-layout-simple section section-dark">
	<div class="section-background">
		<!-- IMAGE BACKGROUND -->
		<div class="section-background-image parallax" data-stellar-ratio="0.4">
			<img src="<?php echo $hero_layout_hi_background_image; ?>" alt="" style="opacity: 0.3;">
		</div>
	</div>
	<div class="container">
		<div class="background-im"></div>
		<div class="hero-content">
			<div class="hero-content-inner">
				<div class="table-row row">
					<div class="table-cell col-md-6">
						<img src="<?php echo $hero_layout_hi_image; ?>" alt="" data-animation="fadeInLeft">
					</div>
					<div class="table-cell col-md-6">
						<div class="hero-heading" data-animation="fadeIn">
              <h1 class="hero-title"><?php echo $hero_layout_hi_title; ?></h1>
              <p class="hero-tagline"><?php echo $hero_layout_hi_subtitle; ?></p>
						</div>
						<p class="hero-buttons">
							<a href="https://wrapbootstrap.com/theme/drew-all-in-one-marketing-landing-page-WB0350PTJ" class="btn btn-lg btn-primary">Buy This Template</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
