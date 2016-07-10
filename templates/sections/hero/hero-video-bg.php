<?php
$hero_btitle = get_sub_field('hero_video_bg_befor_title');
$hero_title = get_sub_field('hero_video_bg_title');
$hero_text = get_sub_field('hero_video_bg_text');
$hero_bg_video = get_sub_field('hero_video_bg_background_video');
$hero_bg_image = get_sub_field('hero_video_bg_background_image');
$hero_image = get_sub_field('hero_video_bg_image');
?>    

<section id="hero-simple" class="hero-section hero-layout-simple hero-fullscreen section section-dark">

  <div class="section-background">
    <div class="section-background-image">
        <div class="background video-bg" data-vide-bg="<?php echo $hero_bg_video['url']; ?>" data-vide-options="posterType: 'detect', loop: true, muted: true, resizing: true, 
        position: 0% 0%, bgColor: 'transparent'">&nbsp;</div>
    </div>
  </div>


    <div class="container">
        <div class="hero-content">
            <div class="hero-content-inner">
                <div class="row heading">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <h5 class="static-hero-title"><?php echo $hero_btitle;?></h5>
                        <h1><?php echo $hero_title;?></h1>
                        <h5 class="static-hero-text"><?php echo $hero_text;?></h5>
                    </div>
                </div>
                <div class="row content">
                    <div class="col-sm-2 col-sm-offset-5">
                        <img class="hero-images" src="<?php echo $hero_image;?>">
                    </div>
                </div>               
            </div>
        </div>
        
    </div>
</section>