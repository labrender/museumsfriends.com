     <!-- Video Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> video-section" style="background-image: url(<?php echo esc_url($bgimage); ?>);">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
                <p><?php echo wp_kses_post($text);?></p>
            </div>

             <div class="video-box">
                <figure class="image">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>">
                    <a href="<?php echo esc_url($link);?>" class="play-now" data-fancybox="gallery" data-caption="">
                        <i class="icon fa fa-play" aria-hidden="true"></i>
                        <span class="ripple"></span>
                        <span class="heading"><?php echo wp_kses_post($btn);?></span>
                    </a>
                    <div class="caption-box">
                        <h3><?php echo wp_kses_post($title1);?></h3>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    <!-- End Video Section -->