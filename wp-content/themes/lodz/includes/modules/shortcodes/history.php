  <!-- History Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> history-section">
        <div class="outer-container clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-box">
                    <div class="sec-title">
                        <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                        <h2><?php echo wp_kses_post($title);?></h2>
                    </div>
                    <div class="text">
                        <p><?php echo wp_kses_post($text);?></p>
                    </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column" style="background-image:url(<?php echo esc_url($bgimage); ?>);">
                <figure class="image-box"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></figure>
            </div>
        </div>
    </section>
    <!-- End History Section -->