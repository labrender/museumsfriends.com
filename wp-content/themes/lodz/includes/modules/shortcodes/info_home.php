<section class="<?php echo esc_attr(wp_kses_post($class));?> info-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="info-box col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <h5><?php echo wp_kses_post($title);?></h5>
                        <p><?php echo wp_kses_post($text);?></p>
                    </div>
                </div>

                <div class="info-box col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <h5><?php echo wp_kses_post($title1);?></h5>
                        <p><?php echo wp_kses_post($text1);?></p>
                    </div>
                </div>

                <div class="info-box col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <h5><?php echo wp_kses_post($title2);?></h5>
                        <p><a href="<?php echo esc_url($page_link);?>"><?php echo wp_kses_post($subtitle);?></a> &nbsp; &nbsp; <a href="<?php echo esc_url($page_link);?>"><?php echo wp_kses_post($subtitle1);?></a> <br><a href="<?php echo esc_url($page_link);?>"><?php echo wp_kses_post($subtitle2);?></a></p>
                    </div>
                </div>

                <div class="info-box col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <a href="<?php echo esc_url($page_link);?>" class="booking-link"> <?php echo wp_kses_post($btn);?> <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>